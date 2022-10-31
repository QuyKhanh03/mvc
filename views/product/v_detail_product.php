<?php @session_start() ?>

<main>

            <!-- breadcrumb-area -->
            <div class="breadcrumb-area breadcrumb-style-two" data-background="img/bg/s_breadcrumb_bg01.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 d-none d-lg-block">
                            <div class="previous-product">
                                <a href="shop-details.html"><i class="fas fa-angle-left"></i> previous product</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="breadcrumb-content">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item"><a href="shop.html">Winter 20</a></li>
                                        <li class="breadcrumb-item"><a href="shop.html">Women</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tracker Jacket</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 d-none d-lg-block">
                            <div class="next-product">
                                <a href="shop-details.html">Next product <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-end -->
            <!-- shop-details-area -->
            <?php
            // echo "<pre>";
            // echo print_r($products_detail);
            // die();
            foreach($products_detail as $key => $value){ ?>
            <section class="shop-details-area pt-100 pb-95">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="shop-details-flex-wrap">
                                <div class="shop-details-nav-wrap">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="item-one-tab" data-toggle="tab" href="#item-one" role="tab" aria-controls="item-one" aria-selected="true"><img src="public/layout/img/product/<?php echo $value -> hinh ?>" alt=""></a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="item-two-tab" data-toggle="tab" href="#item-two" role="tab" aria-controls="item-two" aria-selected="false"><img src="public/layout/img/product/<?php echo $value -> hinh ?>" alt=""></a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="item-three-tab" data-toggle="tab" href="#item-three" role="tab" aria-controls="item-three" aria-selected="false"><img src="public/layout/img/product/<?php echo $value -> hinh ?>" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="shop-details-img-wrap">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="item-one" role="tabpanel" aria-labelledby="item-one-tab">
                                            <div class="shop-details-img">
                                                <img width="530px" height="550px" src="public/layout/img/product/<?php echo $value->hinh ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="item-two" role="tabpanel" aria-labelledby="item-two-tab">
                                            <div class="shop-details-img">
                                                <img src="public/layout/img/product/<?php echo $value->hinh ?>" alt="">
                                                
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="item-three" role="tabpanel" aria-labelledby="item-three-tab">
                                            <div class="shop-details-img">
                                                <img src="public/layout/img/product/<?php echo $value ->hinh ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="shop-details-content">
                                <a href="#" class="product-cat">Tracker Jacket</a>
                                <h3 class="title"><?php echo $value->ten_san_pham ?></h3>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <?php foreach($ma_loai as $index => $item) { ?>
                                    <p class="style-name">Style Name : <?php echo $item->ten_loai ; break ?></p>
                                <?php } ?>
                                <div class="price">Price : $ <?php echo $value -> don_gia ?>.00</div>
                                <div class="product-details-info">
                                    <span>Size <a href="#">Guide</a></span>
                                    <div class="sidebar-product-size mb-30">
                                        <h4 class="widget-title">Product Size</h4>
                                        <div class="shop-size-list">
                                            <ul>
                                                <li><a href="#">S</a></li>
                                                <li><a href="#">M</a></li>
                                                <li><a href="#">L</a></li>
                                                <li><a href="#">XL</a></li>
                                                <li><a href="#">XXL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sidebar-product-color">
                                        <h4 class="widget-title">Color</h4>
                                        <div class="shop-color-list">
                                            <ul>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="perched-info">
                                    <div class="cart-plus-minus">
                                        <form action="#" class="num-block">
                                            <input type="text" class="in-num" value="1" readonly="">
                                            <div class="qtybutton-box">
                                                <span class="plus"><img src="public/layout/img/icon/plus.png" alt=""></span>
                                                <span class="minus dis"><img src="public/layout/img/icon/minus.png" alt=""></span>
                                            </div>
                                        </form>
                                    </div>
                                    <a href="#" class="btn">add to cart</a>
                                    <div class="wishlist-compare">
                                        <ul>
                                            <li><a href="#"><i class="far fa-heart"></i> Add to Wishlist</a></li>
                                            <li><a href="#"><i class="fas fa-retweet"></i> Add to Compare List</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details-share">
                                    <ul>
                                        <li>Share :</li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product-desc-wrap">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description"
                                            aria-selected="true">Description Guide</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                            aria-selected="false">Reviews</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                        <div class="product-desc-title mb-30">
                                            <h4 class="title">Additional information :</h4>
                                        </div>
                                        <p><?php echo $value->mo_ta_chi_tiet ?></p>
                                        <div class="color-size-info">
                                            <ul>
                                                <li><span>COLOR :</span> Black, Gray</li>
                                                <li><span>SIZE :</span> XS, S, M, L</li>
                                            </ul>
                                        </div>
                                        <div class="additional-table">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Size Name</th>
                                                            <td>28</td>
                                                            <td>49</td>
                                                            <td>36</td>
                                                            <td>55</td>
                                                            <td>44</td>
                                                            <td>34</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Waist Stretch</th>
                                                            <td>19</td>
                                                            <td>38</td>
                                                            <td>31</td>
                                                            <td>55</td>
                                                            <td>44</td>
                                                            <td>34</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Hip (7½” below from waist)</th>
                                                            <td>11</td>
                                                            <td>18</td>
                                                            <td>21</td>
                                                            <td>55</td>
                                                            <td>44</td>
                                                            <td>34</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">length (Out seam)</th>
                                                            <td>28</td>
                                                            <td>31</td>
                                                            <td>19</td>
                                                            <td>55</td>
                                                            <td>44</td>
                                                            <td>34</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't
                                        distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very
                                        useful when the focus is meant to be on design, not content.</p>
                                    </div>
                                    <?php  } ?>
                                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                        <?php if (isset($count_bl)) { ?>
                                            <div class="product-desc-title mb-30">
                                                <h4 class="title">Reviews (<?php echo $count_bl; ?>) :</h4>
                                            </div>
                                        <?php } else { ?>
                                            <div class="product-desc-title mb-30">
                                                <h4 class="title">Reviews (0) :</h4>
                                            </div>
                                            <p>Your email address will not be published. Required fields are marked</p>
                                            <p class="adara-review-title">Be the first to review “Adara”</p>
                                            <div class="review-rating">
                                                <span>Your rating *</span>
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if (isset($list_bl)) : ?>
                                            <?php foreach ($list_bl as $key => $each) { ?>
                                                <div class="alert alert-primary" role="alert">
                                                <?php echo $each->noi_dung; ?>
                                                </div>
                                                <?php echo $each->thoi_gian ?>
                                            <?php } ?>
                                        <?php endif ?>
                                        <form action="add-cmt.php" class="comment-form review-form" method="POST">
                                            <span>Your review *</span>
                                            <textarea name="message" id="comment-message" placeholder="Your Comment"></textarea>
                                            <input type="hidden" value="<?php echo $_SESSION['user']->id; ?>" name="user">
                                            <input type="hidden" value="<?php echo $_GET['id']; ?>" name="product">
                                            <button class="btn-comment" name="btn-comment">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related-product-wrap">
                        <div class="row">
                            <div class="col-12">
                                <div class="related-product-title">
                                    <h4 class="title">You May Also Like...</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row related-product-active">
                            <?php
                           
                            foreach($splq as $key => $value){ 
    
                                ?>
                            <div class="col-xl-3">
                                <div class="new-arrival-item text-center">
                                    <div class="thumb mb-25">
                                        <a style="width: 250px; height: 270px;" href="detail.php?id=<?php echo $value->id ?>"><img style="width: 100%; height: 100%;"  src="public/layout/img/product/<?php echo $value->hinh  ?>" alt=""></a>
                                        <div class="product-overlay-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5><a href="detail.php?id=<?php echo $value->id ?>"><?php echo $value->ten_san_pham ?></a></h5>
                                        <span class="price">$<?php echo $value -> don_gia ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- shop-details-area-end -->

        </main>