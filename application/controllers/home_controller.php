<?php

include(DATA.'items.php');

$items = getAllItems($link);


include(VIEWS.'home_view.php');