<?php 
if (isset($_POST['insert'])) {
	require_once 'dbhelper.php';

	
	$clientid = $_POST['ClientId'];
	$firstname = $_POST['Firtsname'];
	$lastname = $_POST['Lastname'];
	$tomb = $_POST['selected_text'];
	$birth = $_POST['Birth'];
	$death = $_POST['Death'];
	$loc = $_POST['location'];
	$image = $_POST['image'];

	$sql = "INSERT db_deadreg (clientID, Firstname, Lastname,typetomb,Birth,Death,Location,Image)
	VALUES ('$clientid','$firstname','$lastname','$tomb','$birth','$death','$loc','$image');";

	if (mysqli_query($db_connection, $sql)) {
		header('location: ../OldClientReg.php?msg=SUCCESS');
		exit();
	}
	else echo "faileD";
}
?>

