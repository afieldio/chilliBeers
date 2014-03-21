<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
<div id='containter'>


<ul>
    <li><a href="?page=home_controller" title="Home Page">Home Page</a></li>
    <li><a href="#" title="">About Page</a></li>
    <li><a href="#" title="">Info Page</a></li>
    <li><a href="#" title="">Contact Page</a></li>
    <?php if(probeAdmin()):?>
    	<li><a href="#" title="Admin">Admin</a></li>
    <?php endif;?>
    <li><a href='?page=basket'>Basket(<?php echo itemsInBasket(); ?>)</a></li>
</ul>

<?php if(!loggedIn()): ?>
	<a href="?page=login_controller" title="login">LOGIN</a>
<?php else: ?>
	<a href="?action=logout" title="logout">LOGOUT</a>
<?php endif; ?>

<?php if(isset($_SESSION['user'])):?>
<?php echo 'Session set';?>
<?php else:?>
<?php echo 'Session not set';?>
<?php endif;?>
