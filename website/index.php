<?php

    ob_start();
    // include header.php file
    include('header.php');
?>
        

<?php 
    //include _banner-area.php
    include('Template/_banner-area.php');

    //include _Top-sale.php
    include('Template/_Top-sale.php');

    //include _Special-price.php
    include('Template/_Special-price.php');

    //include _Banner-Ads.php
    include('Template/_Banner-Ads.php');

    //include _New-phones.php
    include('Template/_New-phones.php');

    //include _Blogs.php
    include('Template/_Blogs.php');
?>


        
<?php
    // include footer.php file
    include('footer.php');
?>
