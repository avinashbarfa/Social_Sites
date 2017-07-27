<?php
	include('db.php');
	session_start();
	if(isset($_SESSION['session_userid'])) {
		$session_id = $_SESSION['session_userid'];                          
		$query = "SELECT * FROM userinfo where userinfo_id= '$session_id'";
		$result = mysqli_query($conn,$query);
		if(!$result) {
			die('Error : Could get data');
		}
		if ($result)
		{
		// Fetch one and one row
		while ($row=mysqli_fetch_row($result))
		{
			$firstname = $row[1];
			$lastname = $row[2];
			$mobile = $row[3];
			$username = $row[4];
			$city = $row[6];
			$dob = $row[7];
		}
		// Free result set
		mysqli_free_result($result);
		}
		
	}else {
		header('Location: index.html');
	}
?>