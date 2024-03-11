    <!-- main header -->
    <header class="header">
        <div class="main-header-wraper main-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-6 col-sm-6 col-md-3 col-lg-2 col-xl-3">
                        <div class="logo-container">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img class='default-logo' src="img/logo.png" data-rjs="2" alt="ecommerce">
                                    <img class='sticky-logo' src="img/logo2.png" data-rjs="2" alt="ecommerce">
                                </a>
                            </div>
                            <!-- End of Logo -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-7 col-xl-6">
                        <!-- menu container -->
                        <div class="menu-container">
                            <div class="menu-wraper">
                                <nav>
                                    <!-- Header-menu -->
                                    <div class="header-menu dosis">
                                        <div id="menu-button">
                                        </div>
                                        <ul>
                                            <li><a href="{{ route('index') }}">Home</a></li>
                                            <li>
                                                <a href="#">Shop</a>
                                                <ul>
                                                    <li><a href="{{ route('smartphone') }}">Smartphone</a></li>
                                                    <li><a href="{{ route('tablet') }}">Tablet</a></li>
                                                    <li><a href="{{ route('accessories') }}">Accessories</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="{{ route('about') }}">About</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                        </ul>
                                    </div>
                                    <!-- End of Header-menu -->
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 top-order">
                        <!-- modal menu -->
                        <div class="modal-menu-container">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <div class="cart-btn" title="Cart list">
                                        <a href="login.html">
                                            <img src="img/icons/add-bag.svg" alt="" class="svg">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="wishlist-btn-off" title="Wish list">
                                        <a href="#">
                                            <img src="img/icons/wishlist.svg" alt="" class="svg">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="account-btn" title="account list">
                                        <a href="#">
                                            <img src="img/icons/account.svg" alt="" class="svg">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End of modal menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End of main header -->

    <!-- offcanvas menu-->

    <!-- offcanvas overlay -->
    <div class="offcanvas-overlay"></div>
    <!-- offcanvas overlay -->

    <!-- offcanvas mainmenu -->
    <div class="offcanvas offcanvas-mainmenu">
        <div class="offcanvas-cancel">
            <img src="img/icons/close-button.svg" class="svg" alt="">
        </div>
    </div>
    <!-- offcanvas mainmenu -->

    <!-- wish list -->
    <div class="offcanvas offcanvas-wishlist" id="wishlist">
        <div class="offcanvas-head">
            <div class="head-text">
                <img src="img/icons/wishlist2.svg" class="svg" alt="">
                <h3>Wishlist</h3>
            </div>
            <div class="offcanvas-cancel">
                <img src="img/icons/close-button.svg" class="svg" alt="">
            </div>
        </div>

        <div class="offcanvas-inner">
            <div class="added-wish-list">
                <!-- single wish list -->
                <div class="single-added-list">
                    <!-- single wish list left -->
                    <div class="single-item-left media align-items-center">
                        <img src="img/clients/wishlist1.png" alt="">
                        <div class="single-item-details midea-body">
                            <h5><a href="#">Women's Strap Sandal</a></h5>
                            <p>$125</p>
                        </div>
                    </div>
                    <!-- End of single wish list left -->

                    <!-- Single wish list right -->
                    <div class="single-item-right text-right">
                        <a href="#"><img src="img/icons/remove.svg" alt="" class="svg"></a>
                        <a href="#" class="btn addto-cart-btn">Add To Cart</a>
                    </div>
                    <!-- End of Single wish list right -->
                </div>
                <!-- End of single wish list -->

                <!-- single wish list -->
                <div class="single-added-list sold-item">
                    <!-- single wish list left -->
                    <div class="single-item-left media align-items-center">
                        <img src="img/clients/wishlist2.png" alt="">
                        <div class="single-item-details midea-body">
                            <h5><a href="#">Wilson Dynasty 29” Basketball</a></h5>
                            <p>$25</p>
                        </div>
                    </div>
                    <!-- End of single wish list left -->

                    <!-- Single wish list right -->
                    <div class="single-item-right text-right">
                        <a href="#"><img src="img/icons/remove.svg" alt="" class="svg"></a>
                        <a href="#" class="btn out-stock-btn">Out Of Stock</a>
                    </div>
                    <!-- End of Single wish list right -->
                </div>
                <!-- End of single wish list -->

                <!-- single wish list -->
                <div class="single-added-list">
                    <!-- single wish list left -->
                    <div class="single-item-left media align-items-center">
                        <img src="img/clients/wishlist3.png" alt="">
                        <div class="single-item-details midea-body">
                            <h5><a href="#">HyperX Gaming Headset</a></h5>
                            <p>$15</p>
                        </div>
                    </div>
                    <!-- End of single wish list left -->

                    <!-- Single wish list right -->
                    <div class="single-item-right text-right">
                        <a href="#"><img src="img/icons/remove.svg" alt="" class="svg"></a>
                        <a href="#" class="btn addto-cart-btn">Add To Cart</a>
                    </div>
                    <!-- End of Single wish list right -->
                </div>
                <!-- End of single wish list -->

                <!-- add to button an support -->
                <div class="view-cart-check-btn text-center">
                    <a href="#" class='btn btn-fill-type'>View Cart List</a>
                    <a href="#" class='btn btn-fill-type'>Check Out</a>
                    <p>Free Shipping on All Orders Over $100!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End of wish list -->

    <!-- cart list -->
    <div class="offcanvas offcanvas-cart-list">
        <div class="offcanvas-head">
            <div class="head-text">
                <img src="img/icons/add-bag2.svg" class="svg" alt="">
                <h3>Cart List</h3>
            </div>
            <div class="offcanvas-cancel">
                <img src="img/icons/close-button.svg" class="svg" alt="">
            </div>
        </div>

        <div class="offcanvas-inner">
            <div class="added-cart-list">
                <!-- single cart list -->
                <div class="single-added-list">
                    <!-- single cart list left -->
                    <div class="single-item-left media align-items-center">
                        <img src="img/clients/wishlist1.png" alt="">
                        <div class="single-item-details midea-body">
                            <h5><a href="#">Women's Strap Sandal</a></h5>
                            <p>25 X 2</p>
                        </div>
                    </div>
                    <!-- End of single cart list left -->

                    <!-- Single wish list right -->
                    <div class="single-item-right text-right">
                        <a href="#"><img src="img/icons/remove.svg" alt="" class="svg"></a>
                        <h6>$320</h6>
                    </div>
                    <!-- End of Single cart list right -->
                </div>
                <!-- End of single cart list -->

                <!-- single cart list -->
                <div class="single-added-list">
                    <!-- single cart list left -->
                    <div class="single-item-left media align-items-center">
                        <img src="img/clients/wishlist2.png" alt="">
                        <div class="single-item-details midea-body">
                            <h5><a href="#">Wilson Dynasty 29” Basketball</a></h5>
                            <p>25 X 1</p>
                        </div>
                    </div>
                    <!-- End of singlecart list left -->

                    <!-- Single cart list right -->
                    <div class="single-item-right text-right">
                        <a href="#"><img src="img/icons/remove.svg" alt="" class="svg"></a>
                        <h6>$13</h6>
                    </div>
                    <!-- End of Single cart list right -->
                </div>
                <!-- End of single cart list -->
            </div>
            <!-- total price -->
            <div class="total-price">
                <h5>Sub Total</h5>
                <h3>$251</h3>
            </div>
            <!-- End of total price -->

            <!-- add to button an support -->
            <div class="view-cart-check-btn text-center">
                <a href="#" class='btn btn-fill-type'>View Cart List</a>
                <a href="#" class='btn btn-fill-type'>Check Out</a>
                <p>Free Shipping on All Orders Over $100!</p>
            </div>
        </div>
    </div>
    <!-- End of cart list -->

    <!-- log in and register -->
    <div class="offcanvas offcanvas-account">
        <div class="offcanvas-head">
            <div class="head-text">
                <img src="img/icons/account2.svg" class="svg" alt="">
                <h3>Account</h3>
            </div>
            <div class="offcanvas-cancel">
                <img src="img/icons/close-button.svg" class="svg" alt="">
            </div>
        </div>

        <div class="offcanvas-inner">
            <!-- login register -->
            <div class="login-register-wrap">
                <!-- login register nav -->
                <div class="login-register-nav">
                    <nav class="nav lr-nav text-center">
                        <a id="nav-login-tab" data-toggle="tab" href="#login" class="active">Log In</a>
                        <a id="nav-register-tab" data-toggle="tab" href="#reg">Register</a>
                    </nav>
                </div>
                <!-- End of login register nav -->

                <!-- login register content -->
                <div class="login-register-content tab-content">
                    <div class="tab-pane fade show active" id="login" role="tabpanel"
                        aria-labelledby="nav-login-tab">
                        <div class="primary-form parsley-validate">
                            <form action="#">
                                <!-- loging input -->
                                <div class="name-input input-field">
                                    <label>
                                        <img src="img/icons/account3.svg" class="svg" alt="">
                                    </label>
                                    <input type="text" placeholder='User name / Email Address'
                                        class="theme-input-style" required>
                                </div>

                                <div class="password-input input-field">
                                    <label>
                                        <img src="img/icons/regi-icon.svg" class="svg" alt="">
                                    </label>
                                    <input type="password" placeholder='password' class="theme-input-style" required>
                                </div>
                                <!-- loging input -->
                                <button type="submit" class="btn btn-fill-type">log In</button>
                            </form>
                            <p>Don’t have an account,<a href="#"> register now!</a></p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="reg" role="tabpanel" aria-labelledby="nav-login-tab">
                        <div class="primary-form parsley-validate">
                            <form action="#">
                                <!-- register input -->
                                <div class="name-input input-field">
                                    <label>
                                        <img src="img/icons/account-icon.svg" class="svg" alt="">
                                    </label>
                                    <input type="text" placeholder='User name / Email Address'
                                        class="theme-input-style" required>
                                </div>

                                <div class="email-input input-field">
                                    <label>
                                        <img src="img/icons/email-icon.svg" class="svg" alt="">
                                    </label>
                                    <input type="email" placeholder='email' class="theme-input-style" required>
                                </div>

                                <div class="password-input input-field">
                                    <label>
                                        <img src="img/icons/regi-icon.svg" class="svg" alt="">
                                    </label>
                                    <input type="password" placeholder='password' class="theme-input-style" required>
                                </div>
                                <!-- register input -->
                                <button type="submit" class="btn btn-fill-type">Register</button>
                            </form>
                            <p>Have an account,<a href="#">Log In now!</a></p>
                        </div>
                    </div>
                </div>
                <!-- End of login register content -->
            </div>
            <!-- End of login register -->

        </div>
    </div>
    <!-- End of log in and ragister -->

    <!-- End of offcanvas menu-->
