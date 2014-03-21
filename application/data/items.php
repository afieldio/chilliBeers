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

function selectItemByCategory($link, $category){

	// select 
	// items.id, items.item, items_have_category.items_id, items_have_category.category_id, category.category from items
	// inner join items_have_category
	// on items.id = items_have_category.items_id
	// inner join category
	// on `category`.id =items_have_category.category_id
	// where category.category like 'drink'
}
