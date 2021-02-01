<?php 
    //require MySql Connection
    require('database/DBController.php');

    //require MySql Connection
    require('database/Product.php');
    
    
    //require Cart Class
    require('database/Cart.php');

    //DBController Object
    $db=new DBController();

    //product object
    $product=new Product($db);
    $product_shuffle=$product->getData();

    //print_r($product->getData());

    //Cart Object
    $Cart=new Cart($db);
    //print_r($Cart->getCartId($product->getData('cart')));
   

?>
