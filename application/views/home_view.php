

<body>
	<h1>Home Page</h1>
	<?php foreach ($items as $item) : ?>
		<a href="?page=item_detail_controller&id=<?php echo $item['id'];?>" title="">
			<h2>Item:<?php echo $item['item']; ?></h2>
			<img src="site/img/<?php echo $item['image'];?>" alt="<?php echo $item['item'];?>">
		</a>
			
	<?php endforeach ;?>

	<?php if (!$_SESSION['loggedIn']): ?>
		<a href="?page=login_controller" title="">LOGIN</a>
	<?php else :?>
		<a href="" title="">LOGOUT</a>
	<?php endif; ?>


<h1>Home Page</h1>

<?php foreach ($items as $item) : ?>
	<a href="?page=item_detail_controller&id=<?php echo $item['id'];?>" title="">
		<h2>Item:<?php echo $item['item']; ?></h2>
		<img src="site/img/<?php echo $item['image'];?>" alt="<?php echo $item['item'];?>">
	</a>
<?php endforeach ;?>






