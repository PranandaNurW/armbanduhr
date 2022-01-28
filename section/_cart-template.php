<!-- cart -->
<section id="cart" class="py-3">
        <div class="container-fluid w-75">
            <h5 class="font-poppins font-size-20 px-3 pt-3">My Cart</h5>

            <div class="row">
                <div class="col-md-9">
                    <!-- item -->
                <?php if (!empty($_SESSION["shopping_cart"])) : ?>
                    <?php  
                        $total = 0;
                        foreach ($_SESSION["shopping_cart"] as $keys => $values) :
                    ?>
                    

                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-2">
                            <img src="<?= $values["item_image"]??"./assets/product/men1.png" ?>" style="height: 120px;"alt="cart1">
                        </div>

                        <div class="col-sm-8">
                            <h5 class="font-lato font-size-20"><?= $values["item_name"]??"Unknown" ?></h5>
                            <small>by <?= $values["item_brand"]??"Brand" ?></small>
                            <!-- rating -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <p class="px-2 font-lato font-size-12">1.042 ratings</p>
                                </div>
                            <!-- /rating -->

                                <div class="qty d-flex pt-2">
                                        <a class="bg-light font-lato text-danger font-size-12 p-2" href="?aksi=hapus&id=<?= $values["item_id"]; ?>">Remove</a>
                                </div>
                            
                            
                        </div>

                        <div class="col-sm-2 text-right">
                            <div class="font-size-14 font-lato text-danger">
                                IDR <span class="product_price"><?= number_format($values["item_price"],0)??"0" ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->
                    <?php $total = $total + ($values["item_price"] * $values["item_quantity"]); ?>
                    <?php endforeach; ?>

                </div>
                
                    <!-- subtotal -->
                    <div class="col-md-3">
                        <div class="sub-total border text-center mt-2">
                            <h6 class="font-size-14 font-poppins py-3"> My items </h6>
                                <div class="border-top py-4">
                                    <h5 class="font-lato font-size-20">Subtotal (<?= count($_SESSION["shopping_cart"]); ?> items)</h5>
                                    <h5><span class="text-danger">IDR <span class="text-danger" id="deal-price"><?= number_format($total,0); ?></span></span></h5>
                                    <button type="submit" class="btn btn-warning mt-3">Proceed to buy</button>
                                </div>
                        </div>
                    </div>
                <!-- /subtotal -->

                <?php endif; ?>

            </div>
        </div>
</section>
<!-- /cart -->