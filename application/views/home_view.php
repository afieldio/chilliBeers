<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Home Page</h1>
	<?php foreach ($items as $item) : ?>
		<a href="?page=item_detail_controller&id=<?php echo $item['id'];?>" title="">
			<h2>Item:<?php echo $item['item']; ?></h2>
			<img src="site/img/<?php echo $item['image'];?>" alt="<?php echo $item['item'];?>">
		</a>
			
	<?php endforeach ;?>
</body>
</html>