<?php


include(DATA.'users.php');





if (!empty($_POST)){

	$email = $_POST['email'];
	$password = $_POST['password'];

	$user = getUserByDetails($link, $email, $password);

	if($user == false){
		echo 'Oh no....no user found';
	}	else {
		
		$_SESSION['loggedIn'] = true;
		$_SESSION['user'] = $user['fName'];
		$_SESSION['role'] = $user['role'];
		header('Location: ?page=home_controller');
		// print_r($user);
		// var_dump($_SESSION);


	}

}


include(VIEWS. 'header_view.php');
include(VIEWS.'login_view.php');

include(VIEWS.'footer_view.php');

