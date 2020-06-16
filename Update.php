<?php
	require('config.php');
	require('db.php');
$id = mysqli_real_escape_string($conn, $_GET['id']);

	// Create Query
	$query = 'SELECT * FROM Student where id = '.$id;

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$post = mysqli_fetch_assoc($result);
	

	if(isset($_POST['submit'])){
			$Name= mysqli_real_escape_string($conn, $_POST['Name']);
			$Email= mysqli_real_escape_string($conn, $_POST['Email']);
			$PhoneNo= mysqli_real_escape_string($conn, $_POST['PhoneNo']);
			$Branch= mysqli_real_escape_string($conn, $_POST['Branch']);

			$update_id = mysqli_real_escape_string($conn, $_POST['id']);
			
			
			$query2 = "INSERT  into Student(Id,Name,Email,PhoneNo,Branch) values('$Id','$Name','$Email','$PhoneNo','$Branch')";
			if(mysqli_query($conn, $query2)){
				header('Location: '.ROOT_URL.'');
			} else {
				echo 'ERROR: '. mysqli_error($conn);
			}
		
	}
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	// Create Query
	$query = 'SELECT * FROM Student where id = '.$id;

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$post = mysqli_fetch_assoc($result);
	

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);

?>

<html>
	<head>
		<title>Registration Form</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<h1 >Student Registration Form</h1>
				</div>
			</div> 
		</nav>
		<div class="container">|
			<form  method="POST" action="" >
				
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="Name" class="form-control" placeholder="Enter your Name">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="Email"  class="form-control" placeholder="Enter your Email id">
				</div>
				<div class="form-group">
					<label>Phone Number</label>
					<input type="text" name="PhoneNo"  class="form-control" placeholder="Enter your Phone Number">
				</div>
				<div class="form-group">
					<label>Branch</label>
					<input type="text" name="Branch"  class="form-control" placeholder="Enter your Branch">
				</div>
				<br>

					<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
					<input type="submit" name="submit" value="Submit" class="btn btn-primary">

				
			</form>
		</div>
	</body>
</html>