<?php

include(DATA.'items.php');

$items = getAllItems($link);


include(VIEWS. 'header_view.php');
include(VIEWS.'home_view.php');
include(VIEWS. 'footer_view.php');