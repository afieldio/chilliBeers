<?php


function getAllItems($link){
	

	$items = array();

	$results = mysqli_query($link, "select * from items");

	while ($record = mysqli_fetch_assoc($results)){
		array_push($items, $record);
	}

	return $items;

}

function getItemById($link, $id){

	$item = mysqli_query($link, "select * from items where id='$id'");

	$data = mysqli_fetch_assoc($item);

	return $data;

}
