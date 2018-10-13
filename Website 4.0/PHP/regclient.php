<?php 

if (isset($_POST['insert'])) {
	require_once 'dbhelper.php';

	$clientID = $_POST['id'];
	$fullname = $_POST['Fname'];
	$Cnumber = $_POST['Cnumber'];
	$Add = $_POST['address'];
	$Srent = $_POST['srent'];
	$Erent = $_POST['erent'];
	

	$sql = "INSERT db_clients (clientID, fullname, contact,address,SRent,ERent)
	VALUES ('$clientID','$fullname','$Cnumber','$Add','$Srent','$Erent');";

	if (mysqli_query($db_connection, $sql)) {
		header('location: ../NewClientReg.php?msg=SUCCESS');
		exit();
	}
	else echo "faileD";
}
?>

