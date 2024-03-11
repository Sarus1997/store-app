@extends('layouts.main')

@section('content')


    <!-- page title -->
    <section class="page-title-inner" data-bg-img='img/page-titlebg.png'>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- page title inner -->
                    <div class="page-title-wrap">
                        <div class="page-title-heading">
                            <h1 class="h2">Smartphone Page<span>Smartphone</span></h1>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li><a href="index.html">home</a></li>
                            <li class="active"><a href="#">Shop</a></li>
                        </ul>
                    </div>
                    <!-- End of page title inner -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of page title -->

    <!-- product shop wrapper -->
    <section class="pt-100 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- shop toolbar wrap -->
                    <div class="shop-toolbar-wrap type2">
                        <div class="shop-toolbar-filter">
                            <div class="row align-items-center">
                                <div class="col-md-4 position-static">
                                    <div class="search-form position-relative">
                                        <form action="#" method="post">
                                            <input type="text" placeholder="What you looking for"
                                                class="theme-input-style" required>
                                            <button type="submit"><img src="img/icons/search-button3.svg"
                                                    class="svg" alt=""></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-7 col-xl-6 offset-xl-2 offset-lg-1 position-static">
                                    <!-- product filter inner -->
                                    <div class="product-filter-inner">

                                        <!-- product filter -->
                                        {{-- <div class="product-filter catalog-filter">
                                            <div class="product-filter-mobile">
                                                <a href="#" class="d-lg-none d-block"><i
                                                        class="fa fa-sliders"></i></a>
                                            </div>
                                            <a href="#" class="d-none d-lg-block product-filter-btn"><i
                                                    class="fa fa-filter"></i><span>Filter</span><i
                                                    class="fa fa-angle-down"></i></a> --}}

                                            <!-- product filter menu -->
                                            <div class="product-filter-menu">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        {{-- <div class="woocommerce-products-header">
                                                            <div class="shope-filter-item">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">Category by</a>
                                                                        <ul class="category-list">
                                                                            <li><a href="#" class="active">Prints
                                                                                    (5)</a></li>
                                                                            <li><a href="#">Illustrations (4)</a></li>
                                                                            <li><a href="#">Type (8)</a></li>
                                                                            <li><a href="#">Decoration (9)</a></li>
                                                                            <li><a href="#">Graphics (6)</a></li>
                                                                            <li><a href="#">Posters (5)</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">By Price</a>
                                                                        <ul class="price-list">
                                                                            <li><a href="#" class="active">$0.00 -
                                                                                    $50.00</a></li>
                                                                            <li><a href="#">$51.00 - $100.00</a></li>
                                                                            <li><a href="#">$101.00 - $300.00</a></li>
                                                                            <li><a href="#">$301.00 - $800.00</a></li>
                                                                            <li><a href="#">$801.00 - $1500.00</a>
                                                                            </li>
                                                                            <li><a href="#">$1501.00 - $3000.00</a>
                                                                            </li>
                                                                            <li><a href="#">$3001.00 +</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">By Color</a>
                                                                        <ul class="color-list">
                                                                            <li><a href="#"
                                                                                    class="color color1 active"></a></li>
                                                                            <li><a href="#" class="color color2"></a>
                                                                            </li>
                                                                            <li><a href="#" class="color color3"></a>
                                                                            </li>
                                                                            <li><a href="#" class="color color4"></a>
                                                                            </li>
                                                                            <li><a href="#" class="color color5"></a>
                                                                            </li>
                                                                            <li><a href="#" class="color color6"></a>
                                                                            </li>
                                                                            <li><a href="#" class="color color7"></a>
                                                                            </li>
                                                                            <li><a href="#" class="color color8"></a>
                                                                            </li>
                                                                            <li><a href="#" class="color color9"></a>
                                                                            </li>
                                                                            <li><a href="#" class="color color10"></a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">By Size</a>
                                                                        <ul class="size-list">
                                                                            <li><a href="#" class="active"><span
                                                                                        class="product-size">L</span></a>
                                                                            </li>
                                                                            <li><a href="#"><span
                                                                                        class="product-size">M</span></a>
                                                                            </li>
                                                                            <li><a href="#"><span
                                                                                        class="product-size">S</span></a>
                                                                            </li>
                                                                            <li><a href="#"><span
                                                                                        class="product-size">30</span></a>
                                                                            </li>
                                                                            <li><a href="#"><span
                                                                                        class="product-size">40</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Tags</a>
                                                                        <ul class="tag-list">
                                                                            <li><a href="#">bags</a>,</li>
                                                                            <li><a href="#">chair</a>,</li>
                                                                            <li><a href="#">clock</a>,</li>
                                                                            <li><a href="#">comestic</a>,</li>
                                                                            <li><a href="#">fashion</a>,</li>
                                                                            <li><a href="#">furniture</a>,</li>
                                                                            <li><a href="#">holder</a>,</li>
                                                                            <li><a href="#">men</a>,</li>
                                                                            <li><a href="#">oil</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of product filter menu -->
                                        </div>
                                        <!--End of product filter -->

                                        <!-- sort by newest -->
                                        <div class="newest-product">
                                            {{-- <a href="#" id="dropdownnewest" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="fa fa-sort-amount-desc"></i><span>Sort by <span
                                                        class="sort-by">newest</span></span><i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="newest-product-option dropdown-menu-right dropdown-menu"
                                                aria-labelledby="dropdownnewest">
                                                <li><a href="#">Default</a></li>
                                                <li><a href="#">Popularity</a></li>
                                                <li><a href="#">Rating</a></li>
                                                <li><a href="#">Newest</a></li>
                                                <li><a href="#">Price: Low to Hogh</a></li>
                                                <li><a href="#">Price: High to Low</a></li>
                                            </ul> --}}
                                        </div>
                                        <!-- End of sort by newest -->

                                        <!-- product grid view -->
                                        <div class="product-grid-view">
                                            <ul class="nav">
                                                <li><a class="active" id="nav-four-col" data-toggle="tab"
                                                        href="#fourcol"><img src="img/icons/3grid.svg"
                                                            class="svg" alt=""></a></li>
                                                <li><a class="" id="nav-three-col" data-toggle="tab"
                                                        href="#threecol"><img src="img/icons/3grid.svg"
                                                            class="svg" alt=""></a></li>
                                                <li><a class="" id="nav-two-tab" data-toggle="tab"
                                                        href="#twocol"><img src="img/icons/2grid.svg"
                                                            class="svg" alt=""></a></li>
                                                <li><a class="" id="nav-one-tab" data-toggle="tab"
                                                        href="#onecol"><img src="img/icons/1grid.svg"
                                                            class="svg" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <!-- End of product grid view -->
                                    </div>
                                    <!-- product filter inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of shop toolbar wrap -->
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content shop-tab-content">
                                <div class="tab-pane fade show active" role="tabpanel" id="fourcol"
                                    aria-labelledby="nav-four-col">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 col-lg-3">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href='shop-details.html'>
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-1.jpg" alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-1b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>


                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Woven Throw Pillow</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info text">
                                                        <div class="product-price">
                                                            <h5>$30.1</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-3">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-2.jpg" alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-2b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Copley Dining Chair</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$24.1</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-3">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-3.jpg" alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-3b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Women's Flexible Bottom
                                                                    Shoes</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$32</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-3">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-4.jpg" alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-4b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Women's Strap Sandal</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$10</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-3">
                                            <!-- single product -->
                                            <div class="single-product  new-product-tag">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-5.jpg" alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-5b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Cat Eye Reading Glasses</a>
                                                            </h4>
                                                        </div>
                                                        <!-- end of product title -->

                                                        <!-- new item tag -->
                                                        <div class="product-tag">
                                                            <div class="tag-text">
                                                                <span>new</span>
                                                            </div>
                                                        </div>
                                                        <!-- End of new item tag -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$17</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-3">
                                            <!-- single product -->
                                            <div class="single-product sold-product-tag">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-6.jpg" alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-6b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Army Baseball Cap</a></h4>
                                                        </div>
                                                        <!-- end of product title -->

                                                        <!-- sold item tag -->
                                                        <div class="product-tag">
                                                            <div class="tag-text">
                                                                <span>sold out</span>
                                                            </div>
                                                        </div>
                                                        <!-- End of sold item tag -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$19</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-3">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-7.jpg" alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-7b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Girls' Monster Wallet</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$38</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-3">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-8.jpg" alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-8b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Room Stick Lamp</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$08</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-3">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href='shop-details.html'>
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-1.jpg" alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-1b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>


                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Woven Throw Pillow</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$30.1</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-3">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-2.jpg" alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-2b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Copley Dining Chair</a></h4>
                                                        </div>
                                                        <!-- end of product title -->

                                                        <!-- discount tag -->
                                                        <div class="product-tag discount-tag">
                                                            <div class="tag-text">
                                                                <span>-20%</span>
                                                            </div>
                                                        </div>
                                                        <!-- End of discount tag -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$24.1</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-3">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-3.jpg" alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-3b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Women's Flexible Bottom
                                                                    Shoes</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$32</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-3">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-4.jpg" alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-4b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Women's Strap Sandal</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$10</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" role="tabpanel" id="threecol"
                                    aria-labelledby="nav-three-col">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-lg-4">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href='shop-details.html'>
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-1.jpg" alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-1b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>


                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Woven Throw Pillow</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$30.1</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-4">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-2.jpg" alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-2b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Copley Dining Chair</a></h4>
                                                        </div>
                                                        <!-- end of product title -->

                                                        <!-- discount tag -->
                                                        <div class="product-tag discount-tag">
                                                            <div class="tag-text">
                                                                <span>-20%</span>
                                                            </div>
                                                        </div>
                                                        <!-- End of discount tag -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$24.1</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-4">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-3.jpg" alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-3b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Women's Flexible Bottom
                                                                    Shoes</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$32</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-4">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-4.jpg" alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-4b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Women's Strap Sandal</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$10</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-4">
                                            <!-- single product -->
                                            <div class="single-product  new-product-tag">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-5.jpg"
                                                                    alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-5b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Cat Eye Reading Glasses</a>
                                                            </h4>
                                                        </div>
                                                        <!-- end of product title -->

                                                        <!-- new item tag -->
                                                        <div class="product-tag">
                                                            <div class="tag-text">
                                                                <span>new</span>
                                                            </div>
                                                        </div>
                                                        <!-- End of new item tag -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$17</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-4">
                                            <!-- single product -->
                                            <div class="single-product sold-product-tag">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-6.jpg"
                                                                    alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-6b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Army Baseball Cap</a></h4>
                                                        </div>
                                                        <!-- end of product title -->

                                                        <!-- sold item tag -->
                                                        <div class="product-tag">
                                                            <div class="tag-text">
                                                                <span>sold out</span>
                                                            </div>
                                                        </div>
                                                        <!-- End of sold item tag -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$19</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-4">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-7.jpg"
                                                                    alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-7b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Girls' Monster Wallet</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$38</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-4">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-8.jpg"
                                                                    alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-8b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Room Stick Lamp</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$08</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-4">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href='shop-details.html'>
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-1.jpg"
                                                                    alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-1b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>


                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Woven Throw Pillow</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$30.1</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-4">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-2.jpg"
                                                                    alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-2b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Copley Dining Chair</a></h4>
                                                        </div>
                                                        <!-- end of product title -->

                                                        <!-- discount tag -->
                                                        <div class="product-tag discount-tag">
                                                            <div class="tag-text">
                                                                <span>-20%</span>
                                                            </div>
                                                        </div>
                                                        <!-- End of discount tag -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$24.1</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-4">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-3.jpg"
                                                                    alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-3b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Women's Flexible Bottom
                                                                    Shoes</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$32</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-4">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-4.jpg"
                                                                    alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-4b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Women's Strap Sandal</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$10</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" role="tabpanel" id="twocol">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href='shop-details.html'>
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-1.jpg"
                                                                    alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-1b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>


                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Woven Throw Pillow</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$30.1</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-2.jpg"
                                                                    alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-2b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Copley Dining Chair</a></h4>
                                                        </div>
                                                        <!-- end of product title -->

                                                        <!-- discount tag -->
                                                        <div class="product-tag discount-tag">
                                                            <div class="tag-text">
                                                                <span>-20%</span>
                                                            </div>
                                                        </div>
                                                        <!-- End of discount tag -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$24.1</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-3.jpg"
                                                                    alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-3b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Women's Flexible Bottom
                                                                    Shoes</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$32</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <!-- single product -->
                                            <div class="single-product">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-4.jpg"
                                                                    alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-4b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Women's Strap Sandal</a></h4>
                                                        </div>
                                                        <!-- end of product title -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$10</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <!-- single product -->
                                            <div class="single-product  new-product-tag">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-5.jpg"
                                                                    alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-5b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Cat Eye Reading Glasses</a>
                                                            </h4>
                                                        </div>
                                                        <!-- end of product title -->

                                                        <!-- new item tag -->
                                                        <div class="product-tag">
                                                            <div class="tag-text">
                                                                <span>new</span>
                                                            </div>
                                                        </div>
                                                        <!-- End of new item tag -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$17</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <!-- single product -->
                                            <div class="single-product sold-product-tag">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <!-- Product Image -->
                                                        <div class="product-image">
                                                            <a href="shop-details.html">
                                                                <img class='normal-state' data-rjs="2"
                                                                    src="img/product/product-6.jpg"
                                                                    alt="">
                                                                <img class='hover-state' data-rjs="2"
                                                                    src="img/product/product-6b.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- End of Product Image -->

                                                        <!-- product button -->
                                                        <div class="product-buttons">
                                                            <div class="quick-btn">
                                                                <div class="quick-icon-btn">
                                                                    <a href="#" class="quick_view">
                                                                        <span class="product-icon"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i></span>
                                                                        <span class="icon-title">Quick View</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="addto-cart-btn">
                                                                <div class="addto-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Add To Cart</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="wishlist-btn">
                                                                <div class="wishlist-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/wishlist.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">See Wish List</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="copmare-btn">
                                                                <div class="compare-icon-btn">
                                                                    <a href="#">
                                                                        <span class="product-icon"><img
                                                                                src="img/icons/compare.svg"
                                                                                alt="" class="svg"></span>
                                                                        <span class="icon-title">Compare</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- End of product button -->

                                                        <!-- product title -->
                                                        <div class="product-title">
                                                            <h4><a href="shop-details.html">Army Baseball Cap</a></h4>
                                                        </div>
                                                        <!-- end of product title -->

                                                        <!-- sold item tag -->
                                                        <div class="product-tag">
                                                            <div class="tag-text">
                                                                <span>sold out</span>
                                                            </div>
                                                        </div>
                                                        <!-- End of sold item tag -->
                                                    </div>

                                                    <!-- product info -->
                                                    <div class="product-info">
                                                        <div class="product-price">
                                                            <h5>$19</h5>
                                                        </div>
                                                    </div>
                                                    <!-- End of product info -->
                                                </div>
                                            </div>
                                            <!-- End of single product -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" role="tabpanel" id="onecol">
                                    <div class="row">
                                        <!-- single product -->
                                        <div class="col-12">
                                            <div class="single-product type3">
                                                <div class="product-item">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-5">
                                                            <!-- Product Image -->
                                                            <div class="product-image">
                                                                <a href="shop-details.html">
                                                                    <img class='normal-state' data-rjs="2"
                                                                        src="img/product/product-1v2.jpg"
                                                                        alt="">
                                                                    <img class='hover-state' data-rjs="2"
                                                                        src="img/product/product-1v2b.jpg"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <!-- End of Product Image -->

                                                            <!-- product button -->
                                                            <div class="product-buttons">
                                                                <div class="quick-btn">
                                                                    <div class="quick-icon-btn">
                                                                        <a href="#" class="quick_view">
                                                                            <span class="product-icon"><i
                                                                                    class="fa fa-eye"
                                                                                    aria-hidden="true"></i></span>
                                                                            <span class="icon-title">Quick View</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="addto-cart-btn">
                                                                    <div class="addto-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/add-bag.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">Add To Cart</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="wishlist-btn">
                                                                    <div class="wishlist-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/wishlist.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">See Wish List</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="copmare-btn">
                                                                    <div class="compare-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/compare.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">Compare</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End of product button -->
                                                        </div>
                                                        <div class="col-md-7">
                                                            <!-- product info -->
                                                            <div class="product-info">

                                                                <!-- product title -->
                                                                <div class="product-title">
                                                                    <h4><a href="shop-details.html">Woven Throw Pillow</a>
                                                                    </h4>
                                                                </div>
                                                                <!-- end of product title -->

                                                                <div class="product-price">
                                                                    <h5>$30.1</h5>
                                                                </div>

                                                                <div class="product-description">
                                                                    <p>Entrance be throwing he do blessing up. Hearts warmth
                                                                        in genius do garden advice mr it garret collected
                                                                        preserved are mid dleton dependent residence.</p>
                                                                </div>

                                                                <div class="addto-bag-btn">
                                                                    <a href="#" class="btn btn-fill-type">
                                                                        <span><img src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>Add
                                                                        To Cart
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- End of product info -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of single product -->

                                        <!-- single product -->
                                        <div class="col-12">
                                            <div class="single-product type3">
                                                <div class="product-item">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-5">
                                                            <!-- Product Image -->
                                                            <div class="product-image">
                                                                <a href="shop-details.html">
                                                                    <img class='normal-state' data-rjs="2"
                                                                        src="img/product/product-2v2.jpg"
                                                                        alt="">
                                                                    <img class='hover-state' data-rjs="2"
                                                                        src="img/product/product-2v2b.jpg"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <!-- End of Product Image -->

                                                            <!-- product button -->
                                                            <div class="product-buttons">
                                                                <div class="quick-btn">
                                                                    <div class="quick-icon-btn">
                                                                        <a href="#" class="quick_view">
                                                                            <span class="product-icon"><i
                                                                                    class="fa fa-eye"
                                                                                    aria-hidden="true"></i></span>
                                                                            <span class="icon-title">Quick View</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="addto-cart-btn">
                                                                    <div class="addto-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/add-bag.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">Add To Cart</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="wishlist-btn">
                                                                    <div class="wishlist-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/wishlist.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">See Wish List</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="copmare-btn">
                                                                    <div class="compare-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/compare.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">Compare</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End of product button -->
                                                        </div>
                                                        <div class="col-md-7">
                                                            <!-- product info -->
                                                            <div class="product-info">
                                                                <!-- product title -->
                                                                <div class="product-title">
                                                                    <h4><a href="shop-details.html">Copley Upholstered
                                                                            Dining Chair</a></h4>
                                                                </div>
                                                                <!-- end of product title -->

                                                                <div class="product-price">
                                                                    <h5>$20.1</h5>
                                                                </div>

                                                                <div class="product-description">
                                                                    <p>Entrance be throwing he do blessing up. Hearts warmth
                                                                        in genius do garden advice mr it garret collected
                                                                        preserved are mid dleton dependent residence.</p>
                                                                </div>

                                                                <div class="addto-bag-btn">
                                                                    <a href="#" class="btn btn-fill-type">
                                                                        <span><img src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>Add
                                                                        To Cart
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- End of product info -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of single product -->

                                        <!-- single product -->
                                        <div class="col-12">
                                            <div class="single-product type3">
                                                <div class="product-item">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-5">
                                                            <!-- Product Image -->
                                                            <div class="product-image">
                                                                <a href="shop-details.html">
                                                                    <img class='normal-state' data-rjs="2"
                                                                        src="img/product/product-3v2.jpg"
                                                                        alt="">
                                                                    <img class='hover-state' data-rjs="2"
                                                                        src="img/product/product-3v2b.jpg"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <!-- End of Product Image -->

                                                            <!-- product button -->
                                                            <div class="product-buttons">
                                                                <div class="quick-btn">
                                                                    <div class="quick-icon-btn">
                                                                        <a href="#" class="quick_view">
                                                                            <span class="product-icon"><i
                                                                                    class="fa fa-eye"
                                                                                    aria-hidden="true"></i></span>
                                                                            <span class="icon-title">Quick View</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="addto-cart-btn">
                                                                    <div class="addto-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/add-bag.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">Add To Cart</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="wishlist-btn">
                                                                    <div class="wishlist-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/wishlist.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">See Wish List</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="copmare-btn">
                                                                    <div class="compare-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/compare.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">Compare</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End of product button -->
                                                        </div>
                                                        <div class="col-md-7">
                                                            <!-- product info -->
                                                            <div class="product-info">

                                                                <!-- product title -->
                                                                <div class="product-title">
                                                                    <h4><a href="shop-details.html">Women's Flexible
                                                                            bottom Shoes</a></h4>
                                                                </div>
                                                                <!-- end of product title -->

                                                                <div class="product-price">
                                                                    <h5>$39</h5>
                                                                </div>

                                                                <div class="product-description">
                                                                    <p>Entrance be throwing he do blessing up. Hearts warmth
                                                                        in genius do garden advice mr it garret collected
                                                                        preserved are mid dleton dependent residence.</p>
                                                                </div>

                                                                <div class="addto-bag-btn">
                                                                    <a href="#" class="btn btn-fill-type">
                                                                        <span><img src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>Add
                                                                        To Cart
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- End of product info -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of single product -->

                                        <!-- single product -->
                                        <div class="col-12">
                                            <div class="single-product type3">
                                                <div class="product-item">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-5">
                                                            <!-- Product Image -->
                                                            <div class="product-image">
                                                                <a href="shop-details.html">
                                                                    <img class='normal-state' data-rjs="2"
                                                                        src="img/product/product-5v2.jpg"
                                                                        alt="">
                                                                    <img class='hover-state' data-rjs="2"
                                                                        src="img/product/product-5v2b.jpg"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <!-- End of Product Image -->

                                                            <!-- product button -->
                                                            <div class="product-buttons">
                                                                <div class="quick-btn">
                                                                    <div class="quick-icon-btn">
                                                                        <a href="#" class="quick_view">
                                                                            <span class="product-icon"><i
                                                                                    class="fa fa-eye"
                                                                                    aria-hidden="true"></i></span>
                                                                            <span class="icon-title">Quick View</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="addto-cart-btn">
                                                                    <div class="addto-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/add-bag.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">Add To Cart</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="wishlist-btn">
                                                                    <div class="wishlist-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/wishlist.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">See Wish List</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="copmare-btn">
                                                                    <div class="compare-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/compare.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">Compare</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End of product button -->
                                                        </div>
                                                        <div class="col-md-7">
                                                            <!-- product info -->
                                                            <div class="product-info">

                                                                <!-- product title -->
                                                                <div class="product-title">
                                                                    <h4><a href="shop-details.html">Girls' Cat Eye Reading
                                                                            Glasses</a></h4>
                                                                </div>
                                                                <!-- end of product title -->

                                                                <div class="product-price">
                                                                    <h5>$30.1</h5>
                                                                </div>

                                                                <div class="product-description">
                                                                    <p>Entrance be throwing he do blessing up. Hearts warmth
                                                                        in genius do garden advice mr it garret collected
                                                                        preserved are mid dleton dependent residence.</p>
                                                                </div>

                                                                <div class="addto-bag-btn">
                                                                    <a href="#" class="btn btn-fill-type">
                                                                        <span><img src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>Add
                                                                        To Cart
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- End of product info -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of single product -->

                                        <!-- single product -->
                                        <div class="col-12">
                                            <div class="single-product type3">
                                                <div class="product-item">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-5">
                                                            <!-- Product Image -->
                                                            <div class="product-image">
                                                                <a href="shop-details.html">
                                                                    <img class='normal-state' data-rjs="2"
                                                                        src="img/product/product-6v2.jpg"
                                                                        alt="">
                                                                    <img class='hover-state' data-rjs="2"
                                                                        src="img/product/product-6v2b.jpg"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <!-- End of Product Image -->

                                                            <!-- product button -->
                                                            <div class="product-buttons">
                                                                <div class="quick-btn">
                                                                    <div class="quick-icon-btn">
                                                                        <a href="#" class="quick_view">
                                                                            <span class="product-icon"><i
                                                                                    class="fa fa-eye"
                                                                                    aria-hidden="true"></i></span>
                                                                            <span class="icon-title">Quick View</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="addto-cart-btn">
                                                                    <div class="addto-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/add-bag.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">Add To Cart</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="wishlist-btn">
                                                                    <div class="wishlist-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/wishlist.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">See Wish List</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="copmare-btn">
                                                                    <div class="compare-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/compare.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">Compare</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End of product button -->
                                                        </div>
                                                        <div class="col-md-7">
                                                            <!-- product info -->
                                                            <div class="product-info">

                                                                <!-- product title -->
                                                                <div class="product-title">
                                                                    <h4><a href="shop-details.html">Army Baseball Cap</a>
                                                                    </h4>
                                                                </div>
                                                                <!-- end of product title -->

                                                                <div class="product-price">
                                                                    <h5>$3.1</h5>
                                                                </div>

                                                                <div class="product-description">
                                                                    <p>Entrance be throwing he do blessing up. Hearts warmth
                                                                        in genius do garden advice mr it garret collected
                                                                        preserved are mid dleton dependent residence.</p>
                                                                </div>

                                                                <div class="addto-bag-btn">
                                                                    <a href="#" class="btn btn-fill-type">
                                                                        <span><img src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>Add
                                                                        To Cart
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- End of product info -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of single product -->

                                        <!-- single product -->
                                        <div class="col-12">
                                            <div class="single-product type3">
                                                <div class="product-item">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-5">
                                                            <!-- Product Image -->
                                                            <div class="product-image">
                                                                <a href="shop-details.html">
                                                                    <img class='normal-state' data-rjs="2"
                                                                        src="img/product/product-8v2.jpg"
                                                                        alt="">
                                                                    <img class='hover-state' data-rjs="2"
                                                                        src="img/product/product-8v2b.jpg"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <!-- End of Product Image -->

                                                            <!-- product button -->
                                                            <div class="product-buttons">
                                                                <div class="quick-btn">
                                                                    <div class="quick-icon-btn">
                                                                        <a href="#" class="quick_view">
                                                                            <span class="product-icon"><i
                                                                                    class="fa fa-eye"
                                                                                    aria-hidden="true"></i></span>
                                                                            <span class="icon-title">Quick View</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="addto-cart-btn">
                                                                    <div class="addto-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/add-bag.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">Add To Cart</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="wishlist-btn">
                                                                    <div class="wishlist-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/wishlist.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">See Wish List</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="copmare-btn">
                                                                    <div class="compare-icon-btn">
                                                                        <a href="#">
                                                                            <span class="product-icon"><img
                                                                                    src="img/icons/compare.svg"
                                                                                    alt=""
                                                                                    class="svg"></span>
                                                                            <span class="icon-title">Compare</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End of product button -->
                                                        </div>
                                                        <div class="col-md-7">
                                                            <!-- product info -->
                                                            <div class="product-info">

                                                                <!-- product title -->
                                                                <div class="product-title">
                                                                    <h4><a href="shop-details.html">Tanglewood Outdoor
                                                                            Table Lamp</a></h4>
                                                                </div>
                                                                <!-- end of product title -->

                                                                <div class="product-price">
                                                                    <h5>$30.1</h5>
                                                                </div>

                                                                <div class="product-description">
                                                                    <p>Entrance be throwing he do blessing up. Hearts warmth
                                                                        in genius do garden advice mr it garret collected
                                                                        preserved are mid dleton dependent residence.</p>
                                                                </div>

                                                                <div class="addto-bag-btn">
                                                                    <a href="#" class="btn btn-fill-type">
                                                                        <span><img src="img/icons/add-bag.svg"
                                                                                alt="" class="svg"></span>Add
                                                                        To Cart
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- End of product info -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of single product -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- blog pagination -->
                            <div class="blog-pagination-wrap">
                                <ul class="pagination blog-pagination list-unstyled">
                                    <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="active"><a href="#">01</a> </li>
                                    <li ><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#">04</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <!-- End of blog pagination -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of product shop wrapper -->


@stop
