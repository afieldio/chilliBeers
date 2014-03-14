<?php

include(DATA.'items.php');

$id = $_GET['id'];

$item = getItemById($link, $id);	

include(VIEWS. 'header_view.php');
include(VIEWS.'item_detail_view.php');
include(VIEWS. 'footer_view.php');
