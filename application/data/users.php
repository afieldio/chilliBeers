<?php

function getUserByDetails($link, $email, $password){
	$users = array();
	$results = mysqli_query($link, 
		"select * from users 
		where eMail = '$email' and 
		pWord = '$password'");

	while ($record = mysqli_fetch_assoc($results)){
		array_push($users, $record);
	}

	return $users;
}