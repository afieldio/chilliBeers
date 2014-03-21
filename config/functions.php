<?php

function loggedIn(){
	if(isset($_SESSION['loggedIn'])){
		return true;
	}else{
		return false;
	}
}

function itemsInBasket(){
	if (isset($_SESSION['basket'])){
		$items = array_sum($_SESSION['basket']);
	} else {
		$items = 0;
	}

	return $items;
}

function probeAdmin(){
	if(isset($_SESSION['role']) && $_SESSION['role']='admin'){
		return true;
	}else{
		return false;
	}
}