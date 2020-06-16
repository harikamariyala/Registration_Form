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
			<form  action="insert.php" method="post">

				<div class="form-group">
					<label>Id</label>
					<input type="number" name="Id" class="form-control" placeholder="Enter your Id">
				</div>
				
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
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</body>
</html>