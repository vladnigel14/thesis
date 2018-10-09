<?php 

if (isset($_POST['insert'])) {
	require_once 'dbhelper.php';

	$deceasedid = $_POST['deceasedID'];
	$firstname = $_POST['Firtsname'];
	$lastname = $_POST['Lastname'];
	$loc = $_POST['location'];
	$tomb = $_POST['selected_text'];
	$image = $_POST['image'];
	$birth = $_POST['Birth'];
	$death = $_POST['Death'];

	$sql = "INSERT db_updatemap (deceasedID, Firtsname, Lastname,location,selected_text,image,Birth,Death)
	VALUES ('$deceasedid','$firstname','$lastname','$loc','$tomb','$image','$birth','$death');";

	if (mysqli_query($db_connection, $sql)) {
		header('location: ../Map.php?msg=SUCCESS');
		exit();
	}
	else echo "faileD";
}

if (isset($_POST['update'])) {
	require_once 'dbhelper.php';

	$deceasedid = $_POST['deceasedID'];
	$firstname = $_POST['Firstname'];
	$lastname = $_POST['Lastname'];
	$loc = $_POST['location'];
	$tomb = $_POST['selected_text'];
	$birth = $_POST['Birth'];
	$death = $_POST['Death'];

	$sql = "UPDATE db_updatemap SET Firstname='$firstname', Lastname='$lastname', location='$loc', selected_text='$tomb', Birth='$birth', Death='$death' WHERE deceasedID='$deceasedid'";
	if (mysqli_query($db_connection, $sql)) {
		header('location: ../Map.php?msg=UPDATED');
		exit();
	}
}

//image 

//if (isset($_POST['upload'])){

	//path to store uploaded image
	//$target= "image/"/basename($FILES['image']['name']);

	//connect to database
	//$db= mysqli_connect("localhost","root","","cemeterydb");
	//$image= $_FILES['image'] ['name'];
	//$text= $_POST['text'];

	//$sql= "INSERT INTO db_deadreg(image) values ('$image')";

	//if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
		//$msg= "Image successfully save";
	//}else{
		//$msg="There was a problem uploading the image.";

	//}
//}

	//image display from database
	//$db= mysqli_connect("localhost","root","","cemeterydb");
	//$sql= "SELECT FROM db_deadreg where image= 'image';
	//$result= mysqli_query($db,$sql);
	//while($row = mysqli_fetch_array($result)){
		//echo "<div id='img_div'>";
		//echo "<img src='image/".$row['image']."'>";
		//echo "<p>.$row['text']."</p>;
		//echo "</div>";
//}
?>