<?php
	$f_name = $_REQUEST["firstname"];
	$l_name = $_REQUEST["lastname"];
	$uname = $_REQUEST["username"];
	$mobile = $_REQUEST["mobile"];
	$upass = $_REQUEST["pass"];
	$location = $_REQUEST["city"];
	$dob = $_REQUEST["dob"];
	include 'db.php';
	$query = "INSERT INTO userinfo (firstname, lastname, mobile, username, password, city, dob) VALUES ('$f_name','$l_name','$mobile','$uname','$upass', '$location', '$dob')
	";
	if($conn -> query($query) === TRUE) {
	     header('Location: index.html');
      }
	else {
		echo "Error: In Storing Data" .$sql. "<br>" . $conn->error; 
	}
	$conn -> close();
?>