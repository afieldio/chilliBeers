<?php


include(DATA.'users.php');

//session_destroy();

$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($_POST)){

	$user = getUserByDetails($link, $email, $password);

	if($user == false){
		echo 'Oh no....no user found';
	}	else {
		$_SESSION['loggedIn'] = true;
	}

}

if ($_SESSION['loggedIn'] == true) {
	echo 'Im logged in';
}else{
	echo 'not logged in';
}

include(VIEWS. 'header_view.php');
include(VIEWS.'login_view.php');
include(VIEWS.'footer_view.php');