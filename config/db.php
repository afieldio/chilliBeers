<?php

$db_name = 'chilliBeers';
$db_host = 'localhost';
$db_pass = 'root';
$db_user = 'root';


//needs four pieces of information to connect to db and they need to be in order!
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// if (!$link) {
//     die('Connect Error (' . mysqli_connect_errno() . ') '
//             . mysqli_connect_error());
// }

// var_dump($link);