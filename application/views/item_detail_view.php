<!DOCTYPE html>
<html>
<head>
	<title>Item Detail Page</title>
</head>
<body>
			<h1> More information on <?php echo $item['item'];?></h1>
			<p>Price:<?php echo $item['price'];?></p>
			<p>Description:<?php echo $item['description'];?></p>
			<img src="/site/img/<?php echo $item['image'];?>" alt="">
</body>
</html>