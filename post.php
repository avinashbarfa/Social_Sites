<?php
	include 'session.php';
	$userid = $session_id;
	$post = $_REQUEST["feed"];
	$query = "INSERT INTO post (userinfo_id, post) VALUES ('$userid','$post')
	";
	if($conn -> query($query) === TRUE) {
		header('Location: home.php');
	}
	else {
		echo "Error: In Storing Data" .$sql. "<br>" . $conn->error; 
	}
	$conn -> close();
?>