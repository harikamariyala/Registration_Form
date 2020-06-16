<?php
	require('config.php');
	require('db.php');
	$query="select * from Student";
	$result=mysqli_query($conn,$query);

	if(isset($_POST['delete'])){
		$delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
		$query = "DELETE FROM Student WHERE id = {$delete_id}";
		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Fetching data from database</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<br>
		<h1 style="text-align:center">Student Details</h1>
		<br>
		<table class="table">
			<thead class="thead-dark">
				<tr>
			
					<th>Name</th>
					<th>Email</th>
					<th>Phone Number</th>
					<th>Branch</th>
					<th>Update Data</th>
					<th>Delete Data</th>
				</tr>
			</thead>
			
			<?php
				while($rows=mysqli_fetch_assoc($result)){
			?>
				<tbody>
					<tr>
			
						<td><?php echo $rows['Name']; ?></td>
						<td><?php echo $rows['Email']; ?></td>
						<td><?php echo $rows['PhoneNo']; ?></td>
						<td><?php echo $rows['Branch']; ?></td>
						<!--<td><button name="update" class="btn btn-success">Update</button></td>
						<td><button name="delete" class="btn btn-danger">Delete</button></td>-->

						<td><a href="Update.php?id=<?php echo $rows['id']; ?>" class="btn btn-primary">Edit</a></td>
						

						<td><form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<input type="hidden" name="delete_id" value="<?php echo $rows['id']; ?>">
							<input type="submit" name="delete" value="delete" class="btn btn-danger">
							<!--<td><a href="Delete.php?del=<?php echo $rows['id']; ?>" class="btn btn-default">Delete</a></td>-->
						</form></td>
					</tr>
				</tbody>
			<?php 
				}
			?>
		</table>
	</body>
</html>
