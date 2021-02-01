<?php
    ob_start();
    // include header.php file
    include('header.php');
?>


<?php


/*  include cart items if it is not empty */
count($product->getData('cart')) ? include ('Template/_carts.php') :  include ('Template/NotFound/_cart-not-found.php');
/*  include cart items if it is not empty */



/*  include top sale section */
count($product->getData('wishlist')) ? include ('Template/_wishlist.php') :  include ('Template/NotFound/_wishlist-not-found.php');
/*  include top sale section */





//include _New-phones.php
include('Template/_New-phones.php');
?>



<?php
    // include footer.php file
    include('footer.php');
?>