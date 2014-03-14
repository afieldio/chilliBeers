<?php

function getUserByDetails($link, $email, $password){
	
	$results = mysqli_query($link, 
		"select users.fName, users.pWord, users.eMail, users.id, users.role from users 
		where eMail = '$email' and 
		pWord = '$password'");

	$user = mysqli_fetch_assoc($results);

	return $user;
}