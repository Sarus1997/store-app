<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Document Title -->
    <title>Ecommerce</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png">

    <!-- CSS Files -->
    <!--==== Google Fonts ====-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7CRoboto+Condensed:300,400,700"
        rel="stylesheet">

    <!--==== Bootstrap css file ====-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--==== Font-Awesome css file ====-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Owl Carusel css file -->
    <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.min.css">

    <!-- Magnific-Popup css file -->
    <link rel="stylesheet" href="plugins/Magnific-Popup/magnific-popup.css">

    <!-- animate css file -->
    <link rel="stylesheet" href="plugins/animate-css/animate.min.css">

    <!-- swiper -->
    <link rel="stylesheet" href="plugins/swiper/swiper.min.css">

    <!--==== Style css file ====-->
    <link rel="stylesheet" href="css/style.css">

    <!--==== Responsive css file ====-->
    <link rel="stylesheet" href="css/responsive.css">

    <!--==== Custom css file ====-->
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <!-- Preloader -->
    <div class="preLoader">
        <div class="preloder-inner">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
    </div>
    <!-- End Of Preloader -->

    <!-- Start navbar -->
    <x-navbar />

    <!-- Start header -->
    @yield('content')

    <!-- Start footer -->
    <x-footer />



    <!-- back to top -->
    <div class="back-to-top">
        <a href="#">
            <div class="back-toop-tooltip"><span>Back To Top</span></div>
            <div class="top-array"></div>
            <div class="top-line"></div>
        </a>
    </div>
    <!-- back to top -->

    <!-- Modal -->
    {{-- <div class="modal-window-container fancy">
        <div class="modal-window-overlay"></div>
        <div class="modal-window-content">
            <div class="modal-window-inner text-center">
                <h2>Don’t Miss Out</h2>
                <h4>Sign Up & Save</h4>
                <h2 class="h1">25</h2><span>%</span>
                <p>It is a long established fact that a reader will<br> distracted by the readable content of a page
                    when looking injected humour its layout.</p>
                <div class="modal-subscribe">
                    <form action="#">
                        <input type="text" class="theme-input-style" required placeholder="Your Email Here">
                        <button type="submit"><img src="img/icons/right-icon.svg" class="svg"
                                alt=""></button>
                    </form>
                </div>
                <div class="modal-window-close">
                    <img src="img/icons/close-button.svg" class="svg" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End of main wrapper -->

    <!-- Modal quick view-->
    <div class="modal-quickview-container">
        <div class="quick-view-content-wrap">
            <div class="modal-window-overlay"></div>
            <div class="quick-view-content">
                <div class="modal-window-close">
                    <img src="img/icons/close-button.svg" class="svg" alt="">
                </div>
                <div class="quick-view-content-inner">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <!-- Start shop product slider -->
                            <div class="shop-product-slider-wrap">
                                <!-- Start shop slider top side -->
                                <div class="swiper-container quick-product-gallery">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class='' src="img/shop/quick-view1.png" alt=""
                                                data-rjs="2" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img class='' src="img/shop/quick-view2.png" alt=""
                                                data-rjs="2" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img class='' src="img/shop/quick-view3.png" alt=""
                                                data-rjs="2" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img class='' src="img/shop/quick-view4.png" alt=""
                                                data-rjs="2" />
                                        </div>
                                    </div>
                                </div>
                                <!-- End of shop slider top side -->

                                <!-- Start shop slider bottom side -->
                                <div class="swiper-container quick-product-thumbs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="img/shop/details-nav1.png" data-rjs="2" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="img/shop/details-nav3.png" data-rjs="2" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="img/shop/details-nav4.png" data-rjs="2" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="img/shop/details-nav5.png" data-rjs="2" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- End of shop slider bottom side -->
                            </div>
                            <!-- End of shop product slider -->
                        </div>

                        <div class="col-lg-5">
                            <!-- product details inner -->
                            <div class="product-details-inner">
                                <!-- product info -->
                                <div class="product-info">
                                    <div class="product-rating">
                                        <div class="star-rating">
                                            <span></span>
                                        </div>
                                    </div>

                                    <!-- product title -->
                                    <div class="product-title">
                                        <h2><a href="shop-details.html">Woven Throw Pillow</a></h2>
                                    </div>
                                    <!-- end of product title -->

                                    <div class="product-price">
                                        <h3 class="new-price">$25</h3>
                                        <h5 class="old-price">$30.1</h5>
                                    </div>

                                    <div class="product-description">
                                        <p>Ladyship it daughter securing procured or am moreover mr Put sir she exercise
                                            vicinity cheerful wondered.</p>
                                    </div>

                                    <!-- list product group -->
                                    <div class="list-product-group">
                                        <ul class="mb-0 list-unstyled">
                                            <li class="size-group group">
                                                <span class="list-heading">size:</span>
                                                <ul class="size-list mb-0 list-unstyled">
                                                    <li><a href="#" class="product-size"><span>L</span></a>
                                                    </li>
                                                    <li><a href="#"
                                                            class="active product-size"><span>M</span></a></li>
                                                    <li><a href="#" class="product-size"><span>S</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="quantity-group group">
                                                <span class="list-heading">quantity:</span>
                                                <div class="product-quantity">
                                                    <span class="minus"><img src="img/icons/minus.svg"
                                                            class="svg" alt=""></span>
                                                    <input type="text" value="0"
                                                        class="product-quantity-list product-size">
                                                    <span class="plus"><img src="img/icons/plus.svg"
                                                            class="svg" alt=""></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End of list product group -->

                                    <!-- product details btns -->
                                    <div class="product-details-btns">
                                        <div class="addto-bag-btn">
                                            <a href="#" class="btn btn-fill-type">
                                                <span><img src="img/icons/add-bag.svg" alt=""
                                                        class="svg"></span><span
                                                    class="d-none d-lg-block mr-0">Add To Cart</span>
                                            </a>
                                        </div>
                                        <div class="wish-btn">
                                            <a href="#" class="btn btn-fill-type">
                                                <span class=""><img src="img/icons/wishlist.svg"
                                                        alt="" class="svg"></span><span
                                                    class="d-none d-lg-block mr-0"></span>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a href="#" class="btn btn-fill-type">
                                                <span><img src="img/icons/compare.svg" alt=""
                                                        class="svg"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- product details btns -->

                                    <!-- more detailes -->
                                    <div class="more-details-button">
                                        <a href="shop-details.html" class="btn btn-line roboto">More Details</a>
                                    </div>
                                    <!-- End of more detailes -->

                                    <!-- product mata -->
                                    <div class="product_meta item-product-meta-info">
                                        <span class="sku_wrapper">
                                            <label>
                                                SKU:
                                                <span>N/A</span>
                                            </label>
                                        </span>
                                        <span class="posted_in">
                                            <span class="meta-item-list">
                                                <a href="#">accessories</a>,
                                                <a href="#">fashion</a>,
                                                <a href="#">summer</a>
                                            </span>
                                        </span>
                                    </div>
                                    <!-- End of product mata -->
                                </div>
                                <!-- End of product info -->
                            </div>
                            <!-- End of product details inner -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Modal quick view-->

    <!-- add add to cart notifacition -->
    <div class="modal-add-notifacition">
        <div class="add-notifacition-inner media align-items-center">
            <div class="add-noti-image">
                <img src="img/product/add-note.jpg" alt="">
            </div>
            <div class="add-noti-text media-body">
                <span>Cat Eye Reading Glasses</span>
                <p>Added To Your Cart Successfully!</p>
            </div>
        </div>
    </div>
    <!-- add add to cart notifacition -->

    <!-- add add to cart notifacition -->
    <div class="modal-wish-notifacition">
        <div class="wish-notifacition-inner media align-items-center">
            <div class="wish-noti-image">
                <img src="img/product/add-note.jpg" alt="">
            </div>
            <div class="wish-noti-text media-body">
                <span>Cat Eye Reading Glasses</span>
                <p>Added To Your Wish Successfully!</p>
            </div>
        </div>
    </div>
    <!-- add add to cart notifacition -->

    <!-- JS Files -->
    <!-- ==== JQuery 3.3.1 js file==== -->
    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- ==== Bootstrap js file==== -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- ==== JQuery Waypoint js file==== -->
    <script src="plugins/waypoints/jquery.waypoints.min.js"></script>

    <!-- ==== Parsley js file==== -->
    <script src="plugins/parsley/parsley.min.js"></script>

    <!-- ==== Ratina js file==== -->
    <script src="plugins/retinajs/retina.min.js"></script>

    <!--===parallax js file===-->
    <script src="plugins/parallax/parallax.js"></script>

    <!--=== hori parallax js file===-->
    <script src="plugins/parallax/parallaxh.min.js"></script>

    <!-- ==== Owl Carousel js file==== -->
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>

    <!-- ====Magnific-Popup js file==== -->
    <script src="plugins/Magnific-Popup/jquery.magnific-popup.min.js"></script>

    <!-- ====Counter js file=== -->
    <script src="plugins/waypoints/jquery.counterup.min.js"></script>

    <!-- ====packery==== -->
    <script src="plugins/isotope/packery.pkgd.min.js"></script>

    <!-- ====swiper==== -->
    <script src="plugins/swiper/swiper.min.js"></script>

    <!-- ====Count down js==== -->
    <script src="plugins/countdown/jquery.countdown.min.js"></script>

    <!-- ====zoom js==== -->
    <script src="plugins/Magnific-Popup/jquery.elevateZoom-3.0.8.min.js"></script>

    <!-- ====tweenMax==== -->
    <script src="plugins/tweenmax/TweenMax.min.js"></script>

    <!-- ====text animation==== -->
    <script src="plugins/text-animation/anime.min.js"></script>

    <!-- ====google map api key====-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2D8wrWMY3XZnuHO6C31uq90JiuaFzGws"></script>

    <!-- ==== Script js file==== -->
    <script src="js/scripts.js"></script>

    <!-- ==== Custom js file==== -->
    <script src="js/custom.js"></script>

</body>

</html>
