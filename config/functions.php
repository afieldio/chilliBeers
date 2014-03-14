<?php

function loggedIn(){
	if(isset($_SESSION['loggedIn'])){
		return true;
	}else{
		return false;
	}
}