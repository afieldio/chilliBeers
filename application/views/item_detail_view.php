
<h1> More information on <?php echo $item['item'];?></h1>
<p>Price:<?php echo $item['price'];?></p>
<p>Description:<?php echo $item['description'];?></p>
<img src="/site/img/<?php echo $item['image'];?>" alt="<?php echo $item['item'];?>">

</br>
</br>
</br>

<a href='?page=basket&action=add&id=<?php echo $item['id']; ?>'>Add to basket</a>


</br>
</br>
</br>

<a href="?page=home_controller" title="back">Back</a>