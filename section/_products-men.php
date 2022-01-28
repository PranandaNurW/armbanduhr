<!-- product men -->
<?php 
    $item_id = $_GET['item_id']??1;
    foreach ($product_shuffle as $item) :
        if($item['item_id'] == $item_id) :
?>

    <section id="product" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="text-center" >
                        <img src="<?php echo $item['item_image']??"./assets/product/men1.png"; ?>" alt="product-men1" class="img-fluid" style="width: 440px; height: 597px;">
                    </div>
                </div>

                <div class="col-lg-6 pt-5 pb-3">
                    <h5 class="font-lato font-size-20"> <?php echo $item['item_name']??"Unknown"; ?></h5>
                    <small>by <?php echo $item['item_brand']??"Brand"; ?></small>
                    <div class="d-flex">
                        <div class="rating text-warning font-size-14 py-2">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <p class="px-2 pt-2 font-lato font-size-12">1.042 ratings | 200+ answered question</p>
                    </div>
                    <hr class="m-0">

                    <!-- product price -->
                    <table class="my-3">
                        <tr class="font-lato font-size-14">
                            <td><b>PRICE</b></td>
                            <td>&nbsp;&nbsp;&nbsp;<strike>IDR <?php $x=2000000.00; echo number_format($item['item_price']+$x,0); ?></strike></td>
                        </tr>
                        <tr class="font-lato font-size-14">
                            <td><b>SPECIAL PRICE</b></td>
                            <td class="font-lato font-size-16 text-danger">&nbsp;&nbsp;&nbsp;IDR <span><?php echo number_format($item['item_price'],0)??'0'; ?></span></td>
                            <td class="font-size-12 text-dark"><small>&nbsp;&nbsp;Inclusive of all taxes</small></td>
                        </tr>
                        <tr class="font-lato font-size-14">
                            <td>You Save</td>
                            <td class="font-lato font-size-14 text-danger">&nbsp;&nbsp;&nbsp;<span>IDR 2,000,000</span></td>
                        </tr>
                    </table>
                    <!-- /product price -->

                    <!-- color -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="color my-3">
                                <h6 class="font-lato font-size-14">COLOR :</h6>
                                <div class="d-flex justify-content-between">
                                    <div class="p-2 color-yellow-bg rounded-circle"><button class="btn color-yellow-bg font-size-14"></button></div>
                                    <div class="p-2 color-primary-bg rounded-circle"><button class="btn color-primary-bg font-size-14"></button></div>
                                    <div class="p-2 color-second-bg rounded-circle"><button class="btn color-second-bg font-size-14"></button></div>
                                </div>
                            </div>
                        </div>
                    <!-- /color -->

                    <!-- size -->
                        <div class="col-lg-8 px-4">
                            <div class="my-3">
                                <h6 class="font-lato font-size-14">SIZE :</h6>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-light active">
                                      <input type="radio" name="options" id="size1" autocomplete="off" checked class="font-lato font-size-12"> 28mm
                                    </label>
                                    <label class="btn btn-light">
                                      <input type="radio" name="options" id="size2" autocomplete="off"  class="font-lato font-size-12"> 32mm
                                    </label>
                                    <label class="btn btn-light">
                                      <input type="radio" name="options" id="size3" autocomplete="off"  class="font-lato font-size-12"> 36mm
                                    </label>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <!-- /size -->
                    <?php if( isset($_SESSION["username"])) : ?>
                    <div class="form-row py-2 font-size-16 font-lato">
                        <div class="col">
                            <form method="post" action="cart.php?aksi=tambah&id=<?= $item['item_id']; ?>">
                                <input type="hidden" name="gambar" value="<?= $item['item_image']??"./assets/product/men1.png"; ?>">
                                <input type="hidden" name="name" value="<?= $item['item_name']??"Unknown"; ?>">
                                <input type="hidden" name="brand" value="<?= $item['item_brand']??"brand" ?>">
                                <input type="hidden" name="price" value="<?= $item['item_price']??'0' ?>">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" name="add_to_cart" class="btn btn-warning form-control font-lato" value="add to cart">Add to cart</button>
                            </form>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if( !isset($_SESSION["username"])) : ?>
                        <hr>
                    <?php endif; ?>


                    <div class="policy py-3">
                        <ul class="pl-4">
                            <li class="font-lato font-size-14 pb-1">Free returns</li>
                            <li class="font-lato font-size-14 pb-1">Free gift wrapping included</li>
                            <li class="font-lato font-size-14 pb-1">Additional Policies apply during a promotion.</li>
                            <li class="font-lato font-size-14 pb-1">Free Items are not eligible for Return or Exchange.</li>
                        </ul>
                    </div>

                </div>

                <div class="col-12 pt-1 px-4">
                    <h6 class="font-poppins">Product Description</h6>
                    <hr>
                </div>

<?php 
        endif;
    endforeach;  
?>

                <div class="row py-2 px-4">
                    <div class="col-lg-6">
                        <p class="font-lato font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quod nesciunt eligendi maxime exercitationem et velit quasi quo facilis officiis vero sed voluptatem harum animi quidem iste accusantium veniam odio!</p>
                        <p class="font-lato font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quod nesciunt eligendi maxime exercitationem et velit quasi quo facilis officiis vero sed voluptatem harum animi quidem iste accusantium veniam odio!</p>
                    </div>

                    <div class="col-lg-6 px-4">
                        <caption>Product Specs</caption>
                        <table class="table table-sm font-lato font-size-12">
                         <?php  
                        foreach ($product_specs as $item) :
                            if($item['product_id'] == $item_id) :
                        ?>
                            <tr>
                                <td><b>Case thickness</b></td>
   
                                <td style="text-align:right"><?= $item['thick'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Dial color</b></td>
                                <td style="text-align:right"><?= $item['color'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Strap width</b></td>
                                <td style="text-align:right"><?= $item['strapw'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Strap color</b></td>
                                <td style="text-align:right"><?= $item['strapc'] ?></td>
                            </tr>
                            <tr class="border-bottom">
                                <td><b>Water resistant</b></td>
                                <td style="text-align:right"><?= $item['water'] ?></td>
                            </tr>
                        <?php 
                            endif;
                        endforeach;
                        ?>
                           
                        </table>
                    </div>
            </div>
            </div>

            
        </div>
    </section>


<!-- /product men -->