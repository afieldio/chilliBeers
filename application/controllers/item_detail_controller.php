<?php

include(DATA.'items.php');

$id = $_GET['id'];

$item = getItemById($link, $id);	


include(VIEWS.'item_detail_view.php');