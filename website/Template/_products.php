<!--product-->
<?php
    //request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
       if(isset($_POST['top_sale_submit'])){
       //call method add to cart
       $Cart->addToCart($_POST['user_id'],$_POST['item_id']);    
       }
   }

    $item_id=$_GET['item_id'] ?? 1;
    foreach($product->getData() as $item):
        if($item['item_id'] == $item_id):
?>



<section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                        <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                    </div>
                    <div class="col">
                    <form method="POST">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>"> 
                                    <?php 
                                        if (in_array($item['item_id'],$Cart->getCartId($product->getData('cart')) ?? [] )){
                                            echo '<button type="submit" disabled class="btn btn-success form-control">Already in cart</button>';}
                                        else{
                                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning form-control">Add to cart</button>';
                                        }
                                    ?>
                                
                    </form>
                    </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                        <small>By <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered questions</a>
                        </div>
                        <hr class="m-0">


                        <!--product price-->
                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>M.R.P:</td>
                                <td class="font-size-20 text-dark"><strike>&#8377;19000</strike></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Deal Price:</td>
                                <td class="font-size-20 text-danger">&nbsp;&#8377;<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;inclusive of all Taxes</small></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>You Save</td>
                                <td>&nbsp;&#8377;<span class="font-size-16 text-danger">4000</span></td>
                            </tr>
                        </table>

                        <!--/product price-->
                        
                        
                        <!--policy-->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">10 Days<br>Repalcement</a>

                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">Fast<br>Delivery</a>

                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">1 year<br>warranty</a>

                                </div>
                            </div>
                        </div>
                        <!--/policy-->
                        <hr>
                        <!--product detail-->
                        <div id="order-details" class="font-rale d-flex flex-column text-dark">
                            <small>Delivery by March-29 - April 7</small>
                            <small>Sold By <a href="#">Nyasa Electronics</a></small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 421202</small>
                        </div>
                        <!--/product detail-->

                        <div class="row">
                            <div class="col-6">
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-baloo">Color</h6>
                                    <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <!--product qty-->
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">Quantity</h6>
                                    <div class="px-4 d-flex font-rale">
                                        <button class="qty-up border bg-light" data-id="prod1" ><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="prod1" class="qty_input border px-2 w-50 bg-light" disabled value="1" style="text-align: center;">
                                        <button class="qty-down border bg-light" data-id="prod1"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                                <!--/product qty-->
                            </div>
                        </div>


                        <!--Size-->
                        <div class="size my-3">
                            <h6 class="font-baloo">Size</h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="font-rubik border py-2">
                                    <button class="btn p-0 font-size-14">4 GB RAM</button>
                                </div>
                                <div class="font-rubik border py-2">
                                    <button class="btn p-0 font-size-14">6 GB RAM</button>
                                </div>
                                <div class="font-rubik border py-2">
                                    <button class="btn p-0 font-size-14">8 GB RAM</button>
                                </div>
                            </div>
                        </div>

                        <!--/Size-->
                    </div>

                    <div class="col-12">
                        <h6 class="font-rubik">Product Description</h6>
                        <hr>
                        <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi aliquam iure optio recusandae cupiditate iusto voluptates quae nam unde aperiam et laudantium commodi consequuntur, voluptatem soluta autem sit quam a corrupti! Illo, dicta! Assumenda tempore incidunt temporibus, quas molestias repellendus</p>
                        <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi aliquam iure optio recusandae cupiditate iusto voluptates quae nam unde aperiam et laudantium commodi consequuntur, voluptatem soluta autem sit quam a corrupti! Illo, dicta! Assumenda tempore incidunt temporibus, quas molestias repellendus</p>
                    </div>
                </div>
            </div>
        </section>
        <!--/product-->

<?php
    endif;
    endforeach;
    ?>







