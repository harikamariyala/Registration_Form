<?php
	require('config.php');
	require('db.php');

	if(isset($_POST['submit'])){
		if(!empty($_POST['Id']) && !empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['PhoneNo']) && !empty($_POST['Branch'])){
			$Id=$_POST['Id'];
			$Name=$_POST['Name'];
			$Email=$_POST['Email'];
			$PhoneNo=$_POST['PhoneNo'];
			$Branch=$_POST['Branch'];


			//$query = "INSERT INTO posts(title, author,body) VALUES('$title', '$author', '$body')";


			$query = "INSERT  into Student(Id,Name,Email,PhoneNo,Branch) values('$Id','$Name','$Email','$PhoneNo','$Branch')";
			/*if(mysql_query($conn,$query)){
				echo 'Your Data has been saved into database';
			}*/
			if(mysqli_query($conn, $query)){
				//header('Location: '.ROOT_URL.'');
				header('Location:'.('ViewDetails.php').'');
				echo "Your data inserted successfully";

			} else {
				echo 'ERROR: '. mysqli_error($conn);
			}
		}
	}
?>