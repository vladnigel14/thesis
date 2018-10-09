<?php 

if (isset($_POST['insert'])) {
	require_once 'dbhelper.php';

	$clientID = $_POST['staffid'];
	$fullname = $_POST['Fname'];
	$Uname = $_POST['username'];
	$Pword = $_POST['password'];
	
	

	$sql = "INSERT db_staff (staffID, fullname, username,password)
	VALUES ('$clientID','$fullname','$Uname','$Pword');";

	if (mysqli_query($db_connection, $sql)) {
		header('location: ../Newstaffregistration.php?msg=SUCCESS');
		exit();
	}
	else echo "faileD";
}

?>