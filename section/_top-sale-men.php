<!-- Men -->
    <section id="top-sale">
            <div class="container py-5">
                <h4 class="font-lato font-size-20">Top-Sale Men Watches</h4> 
                <hr>
                <!-- owl carousel -->
                <div class="owl-carousel owl-theme">

                    <?php foreach($product_shuffle as $item) : ?>
                        <?php if($item['item_type'] == 'Men' && $item['item_id'] >= '1' && $item['item_id'] < '7') : ?>
                    <div class="item py-2">
                        <div class="product font-lato">
                            <div class="text-center">

                            <a href="<?php printf('%s?item_id=%s', 'product-men.php', $item['item_id']) ?>"><img src="<?= $item['item_image']??"./assets/product/men1.png"; ?>" alt="topsale1" class="img-fluid mx-auto" style="width: 213px; height: 289px;" ></a>

                            </div>
                            <div class="text-center">
                                <h6 class="font-lato"> <?= $item['item_name']??"Unknown"; ?> </h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span class="font-lato">IDR <?= number_format($item['item_price'],0)??'0' ?></span>
                                </div>

                                <?php if( isset($_SESSION["username"])) : ?>
                                    <form method="post" action="cart.php?aksi=tambah&id=<?= $item['item_id']; ?>">
                                        <input type="hidden" name="gambar" value="<?= $item['item_image']??"./assets/product/men1.png"; ?>">
                                        <input type="hidden" name="name" value="<?= $item['item_name']??"Unknown"; ?>">
                                        <input type="hidden" name="brand" value="<?= $item['item_brand']??"brand" ?>">
                                        <input type="hidden" name="price" value="<?= $item['item_price']??'0' ?>">
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" name="add_to_cart" class="btn btn-warning font-size-12 font-lato" value="add to cart">Add to cart</button>
                                    </form>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <!-- /owl carousel -->
            </div>
    </section>
<!-- /Men -->