 <?php require_once('connection/dbConnect.php')?>
 <?php

   $queryy = "SELECT * FROM products";
   $result=mysql_query($queryy,$connect);
   $num_rows = mysql_num_rows($result);

    for($i = 0; $i < $num_rows; $i++)
	{
    $row = mysql_fetch_assoc($result);
       
      $id = $row['id'];
	  $description = $row['description'];
	  $price = $row['price'];
	  $quantity = $row['quantity'];
	  $image = $row['image'];
	
?>
        <div class="product_box">
            <a href="productdetail.html"><img src="images/cakes/<?php echo $image; ?>" /></a>
			<h3><?php $id; ?></h3>
      		<h3><?php echo $description; ?></h3>
            <p class="product_price"><?php echo 'Ksh'.$price;?></p>
            <p class="add_to_cart">
                <a href="beautiful-wedding.html">Detail</a>
                //<a href="shoppingcart.php?id=<?php echo $id ?>">Add to Cart</a>
            </p>
        </div>   
   <?php } ?>	