<?php

/*
 * WDHE1012 Bookstore
 */



include('config/init.php');

opcache_reset();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home_controller';
}

print_r($_GET['page']);

include(CONTROLLERS . $page . '.php');

?>
