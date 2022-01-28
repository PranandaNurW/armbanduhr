<!-- women page -->
<section id="shop-watches" class="py-3">
        <div class="container">
            <h5 class="font-poppins font-size-20 px-3 pt-3">Women Watches</h5>
            <hr>
            <!-- card items -->
            <div class="row mt-4 justify-content-center">
            <?php foreach($product_shuffle as $item) : ?>
                <?php if($item['item_type'] == 'Women') : ?>
                <div class="col-sm-3 mb-4 shop-item">
                    <div class="p-2 text-center box border">
                        <div>
                            <a href="<?php printf('%s?item_id=%s', 'product-women.php', $item['item_id']) ?>""><img src="<?= $item['item_image']??"./assets/product/men1.png"; ?>" alt="product-list1" style="width: 235px; height: 319px;" class="img-fluid"></a>
                        </div>
                        <hr>
                        <div class="pb-4">
                            <div>
                                <h5 class="font-lato font-size-16"><?= $item['item_name']??"Unknown"; ?></h5>
                                <h6 class="font-lato font-size-12"><?php echo $item['item_brand']??"Brand"; ?></h6>
                            </div>
                            <!-- rating -->
                                <div>
                                    <div class="rating text-warning font-size-12 py-2">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                </div>
                            <div class="price pb-3">
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
            
            <!-- /card items -->
        </div>
</section>
<!-- /women page -->