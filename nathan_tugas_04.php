<?php
$customer = "Budi" ;
$product_name = "keyboard" ;
$price = 250000 ;
$quantity = 2 ;
$shipping_cost = 20000 ;

$total = $price * $quantity + $shipping_cost ;
echo '<br/>' ;
echo $customer ;
echo '<br/>' ;
echo $product_name ;
echo '<br/>' ; 
echo "Grand total" . $total ;
?>