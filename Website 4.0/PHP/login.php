<?php

// call the login() function if register_btn is clicked
if (isset($_POST['loginmo'])) {
	login();
}

// LOGIN USER
function login(){
	require_once 'PHP/dbhelper.php';
	//global $db, $username, $errors;

	// grap form values
	$username = e($_POST['uname']);
	$password = e($_POST['psw']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM db_staff WHERE username='$uname' AND password='$psw' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['psw'] == 'password') {

				$_SESSION['psw'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: ../Home.php?msg=SUCCESS');  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: index.php');
			}
		}else{
		array_push($errors, "Wrong username/password combination");
		}
	}
}
?>