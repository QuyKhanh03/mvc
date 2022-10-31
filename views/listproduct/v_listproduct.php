<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" data-background="public/layout/img/bg/breadcrumb_bg01.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Our Shop</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- shop-area -->
<section class="shop-area pt-95 pb-100">
    <div class="container">
        <div class="shop-top-meta mb-35">
            <div class="row">
                <div class="col-md-6">
                    <div class="shop-top-left">
                        <ul>
                            <li><a href="#"><i class="flaticon-menu"></i> FILTER</a></li>
                            <li>Showing 1–9 of 80 results</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shop-top-right">
                        <form action="#">
                            <select name="select">
                                <option value="">Sort by newness</option>
                                <option>Free Shipping</option>
                                <option>Best Match</option>
                                <option>Newest Item</option>
                                <option>Size A - Z</option>
                            </select>
                        </form>
                        <div class="shop-search"><a href="#"><i class="flaticon-search"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($products as $key=>$value)  {?>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="new-arrival-item text-center mb-50">
                    <div class="thumb mb-25">
                        <a style="width: 250px; height: 300px;" href="detail.php?id=<?php echo $value->id ?>"><img style="width: 100%; height: 100%;" src="public/layout/img/product/<?php echo $value ->hinh ?>" alt=""></a>
                        <div class="product-overlay-action">
                            <ul>
                                <li><a href="cart.php"><i class="far fa-heart"></i></a></li>
                                <li><a href="detail.php?id=<?php echo $value->id ?>"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content">
                        <h5><a href="detail.php?id=<?php echo $value->id ?>"><?php echo $value->ten_san_pham; ?> </a></h5>
                        <span class="price"><?php echo $value->don_gia ?> $</span>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="shop-more-btn text-center">
                    <a href="shop.html" class="btn">Load More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- shop-area-end -->
