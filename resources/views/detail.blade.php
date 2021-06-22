<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail</title>
    <!-- font awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/fonts/all.min.css">
    <link rel="stylesheet" href="./assets/fonts/all.css">
    <!-- roboto font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="./assets/css/home.css">

    <link rel="shortcut icon" type="image/x-icon" href="assets/image/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="assets/css/chosen.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/color-01.css">
</head>

<body class=" detail page ">

    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="mid-section main-info-area">

                        {{-- <div class="wrap-logo-top left-section">
                            <a href="index.html" class="link-to-home"><img src="assets/image/logo-top-1.png"
                                    alt="mercado"></a>
                        </div> --}}

                        <div class="wrap-search center-section">
                            <div class="wrap-search-form">
                                <form action="#" id="form-search-top" name="form-search-top">
                                    <input type="text" name="search" value="" placeholder="Search here...">
                                    <button form="form-search-top" type="button"><i class="fa fa-search"
                                            aria-hidden="true"></i></button>
                                    <div class="wrap-list-cate">
                                        <input type="hidden" name="product-cate" value="0" id="product-cate">
                                        <a href="#" class="link-control">All Category</a>
                                        <ul class="list-cate">
                                            <li class="level-0">All Category</li>
                                            <li class="level-1">-Electronics</li>
                                            <li class="level-2">Batteries & Chargens</li>
                                            <li class="level-2">Headphone & Headsets</li>
                                            <li class="level-2">Mp3 Player & Acessories</li>
                                            <li class="level-1">-Smartphone & Table</li>
                                            <li class="level-2">Batteries & Chargens</li>
                                            <li class="level-2">Mp3 Player & Headphones</li>
                                            <li class="level-2">Table & Accessories</li>
                                            <li class="level-1">-Electronics</li>
                                            <li class="level-2">Batteries & Chargens</li>
                                            <li class="level-2">Headphone & Headsets</li>
                                            <li class="level-2">Mp3 Player & Acessories</li>
                                            <li class="level-1">-Smartphone & Table</li>
                                            <li class="level-2">Batteries & Chargens</li>
                                            <li class="level-2">Mp3 Player & Headphones</li>
                                            <li class="level-2">Table & Accessories</li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="wrap-icon right-section">
                            <div class="wrap-icon-section wishlist">
                                <a href="#" class="link-direction">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <div class="left-info">
                                        <span class="index">0 item</span>
                                        <span class="title">Wishlist</span>
                                    </div>
                                </a>
                            </div>
                            <div class="wrap-icon-section minicart">
                                <a href="#" class="link-direction">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <div class="left-info">
                                        <span class="index">4 items</span>
                                        <span class="title">CART</span>
                                    </div>
                                </a>
                            </div>
                            <div class="wrap-icon-section show-up-after-1024">
                                <a href="#" class="mobile-navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="nav-section header-sticky">
                    <div class="primary-nav-section">
                        <div class="container">
                            <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                                <li class="menu-item home-icon">
                                    <a href="index.html" class="link-term mercado-item-title"><i class="fa fa-home"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li class="menu-item">
                                    <a href="about-us.html" class="link-term mercado-item-title">About Us</a>
                                </li>
                                <li class="menu-item">
                                    <a href="shop.html" class="link-term mercado-item-title">Shop</a>
                                </li>
                                <li class="menu-item">
                                    <a href="cart.html" class="link-term mercado-item-title">Cart</a>
                                </li>
                                <li class="menu-item">
                                    <a href="contact-us.html" class="link-term mercado-item-title">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--main area-->
    <main id="main" class="main-site">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>detail</span></li>
                </ul>
            </div>
            <div class="row">

                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                    <div class="wrap-product-detail">
                        <div class="detail-media">
                            <div class="product-gallery">
                                <ul class="slides">

                                    <li data-thumb="assets/image/products/digital_18.jpg">
                                        <img src="assets/image/products/digital_18.jpg" alt="product thumbnail" />
                                    </li>

                                    <li data-thumb="assets/image/products/digital_17.jpg">
                                        <img src="assets/image/products/digital_17.jpg" alt="product thumbnail" />
                                    </li>

                                    <li data-thumb="assets/image/products/digital_15.jpg">
                                        <img src="assets/image/products/digital_15.jpg" alt="product thumbnail" />
                                    </li>

                                    <li data-thumb="assets/image/products/digital_02.jpg">
                                        <img src="assets/image/products/digital_02.jpg" alt="product thumbnail" />
                                    </li>

                                    <li data-thumb="assets/image/products/digital_08.jpg">
                                        <img src="assets/image/products/digital_08.jpg" alt="product thumbnail" />
                                    </li>

                                    <li data-thumb="assets/image/products/digital_10.jpg">
                                        <img src="assets/image/products/digital_10.jpg" alt="product thumbnail" />
                                    </li>

                                    <li data-thumb="assets/image/products/digital_12.jpg">
                                        <img src="assets/image/products/digital_12.jpg" alt="product thumbnail" />
                                    </li>

                                    <li data-thumb="assets/image/products/digital_14.jpg">
                                        <img src="assets/image/products/digital_14.jpg" alt="product thumbnail" />
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="detail-info">
                            <div class="product-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <a href="#" class="count-review">(05 review)</a>
                            </div>
                            <h2 class="product-name">Radiant-360 R6 Wireless Omnidirectional Speaker [White]</h2>
                            <div class="short-desc">
                                <ul>
                                    <li>7,9-inch LED-backlit, 130Gb</li>
                                    <li>Dual-core A7 with quad-core graphics</li>
                                    <li>FaceTime HD Camera 7.0 MP Photos</li>
                                </ul>
                            </div>
                            <div class="wrap-social">
                                <a class="link-socail" href="#"><img src="assets/image/social-list.png" alt=""></a>
                            </div>
                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                            <div class="stock-info in-stock">
                                <p class="availability">Availability: <b>In Stock</b></p>
                            </div>
                            <div class="quantity">
                                <span>Quantity:</span>
                                <div class="quantity-input">
                                    <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*">

                                    <a class="btn btn-reduce" href="#"></a>
                                    <a class="btn btn-increase" href="#"></a>
                                </div>
                            </div>
                            <div class="wrap-butons">
                                <a href="#" class="btn add-to-cart">Add to Cart</a>
                                <div class="wrap-btn">
                                    <a href="#" class="btn btn-compare">Add Compare</a>
                                    <a href="#" class="btn btn-wishlist">Add Wishlist</a>
                                </div>
                            </div>
                        </div>
                        <div class="advance-info">
                            <div class="tab-control normal">
                                <a href="#description" class="tab-control-item active">description</a>
                                <a href="#add_infomation" class="tab-control-item">Addtional Infomation</a>
                                <a href="#review" class="tab-control-item">Reviews</a>
                            </div>
                            <div class="tab-contents">
                                <div class="tab-content-item active" id="description">
                                    <p>Lorem ipsum dolor sit amet, an munere tibique consequat mel, congue albucius no
                                        qui, a t everti meliore erroribus sea. ro cum. Sea ne accusata voluptatibus. Ne
                                        cum falli dolor voluptua, duo ei sonet choro facilisis, labores officiis
                                        torquatos cum ei.</p>
                                    <p>Cum altera mandamus in, mea verear disputationi et. Vel regione discere ut,
                                        legere expetenda ut eos. In nam nibh invenire similique. Atqui mollis ea his,
                                        ius graecis accommodare te. No eam tota nostrum eque. Est cu nibh clita. Sed an
                                        nominavi, et stituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum
                                        euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit,
                                        modus taria . </p>
                                    <p>experian soleat maluisset per. Has eu idque similique, et blandit scriptorem
                                        tatibus mea. Vis quaeque ocurreret ea.cu bus scripserit, modus voluptaria ex
                                        per.</p>
                                </div>
                                <div class="tab-content-item " id="add_infomation">
                                    <table class="shop_attributes">
                                        <tbody>
                                            <tr>
                                                <th>Weight</th>
                                                <td class="product_weight">1 kg</td>
                                            </tr>
                                            <tr>
                                                <th>Dimensions</th>
                                                <td class="product_dimensions">12 x 15 x 23 cm</td>
                                            </tr>
                                            <tr>
                                                <th>Color</th>
                                                <td>
                                                    <p>Black, Blue, Grey, Violet, Yellow</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-content-item " id="review">

                                    <div class="wrap-review-form">

                                        <div id="comments">
                                            <h2 class="woocommerce-Reviews-title">01 review for <span>Radiant-360 R6
                                                    Chainsaw Omnidirectional [Orage]</span></h2>
                                            <ol class="commentlist">
                                                <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                                    id="li-comment-20">
                                                    <div id="comment-20" class="comment_container">
                                                        <img alt="" src="assets/image/author-avata.jpg" height="80"
                                                            width="80">
                                                        <div class="comment-text">
                                                            <div class="star-rating">
                                                                <span class="width-80-percent">Rated <strong
                                                                        class="rating">5</strong> out of 5</span>
                                                            </div>
                                                            <p class="meta">
                                                                <strong
                                                                    class="woocommerce-review__author">admin</strong>
                                                                <span class="woocommerce-review__dash">–</span>
                                                                <time class="woocommerce-review__published-date"
                                                                    datetime="2008-02-14 20:00">Tue, Aug 15, 2017</time>
                                                            </p>
                                                            <div class="description">
                                                                <p>Pellentesque habitant morbi tristique senectus et
                                                                    netus et malesuada fames ac turpis egestas.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div><!-- #comments -->

                                        <div id="review_form_wrapper">
                                            <div id="review_form">
                                                <div id="respond" class="comment-respond">

                                                    <form action="#" method="post" id="commentform" class="comment-form"
                                                        novalidate="">
                                                        <p class="comment-notes">
                                                            <span id="email-notes">Your email address will not be
                                                                published.</span> Required fields are marked <span
                                                                class="required">*</span>
                                                        </p>
                                                        <div class="comment-form-rating">
                                                            <span>Your rating</span>
                                                            <p class="stars">

                                                                <label for="rated-1"></label>
                                                                <input type="radio" id="rated-1" name="rating"
                                                                    value="1">
                                                                <label for="rated-2"></label>
                                                                <input type="radio" id="rated-2" name="rating"
                                                                    value="2">
                                                                <label for="rated-3"></label>
                                                                <input type="radio" id="rated-3" name="rating"
                                                                    value="3">
                                                                <label for="rated-4"></label>
                                                                <input type="radio" id="rated-4" name="rating"
                                                                    value="4">
                                                                <label for="rated-5"></label>
                                                                <input type="radio" id="rated-5" name="rating" value="5"
                                                                    checked="checked">
                                                            </p>
                                                        </div>
                                                        <p class="comment-form-author">
                                                            <label for="author">Name <span
                                                                    class="required">*</span></label>
                                                            <input id="author" name="author" type="text" value="">
                                                        </p>
                                                        <p class="comment-form-email">
                                                            <label for="email">Email <span
                                                                    class="required">*</span></label>
                                                            <input id="email" name="email" type="email" value="">
                                                        </p>
                                                        <p class="comment-form-comment">
                                                            <label for="comment">Your review <span
                                                                    class="required">*</span>
                                                            </label>
                                                            <textarea id="comment" name="comment" cols="45"
                                                                rows="8"></textarea>
                                                        </p>
                                                        <p class="form-submit">
                                                            <input name="submit" type="submit" id="submit"
                                                                class="submit" value="Submit">
                                                        </p>
                                                    </form>

                                                </div><!-- .comment-respond-->
                                            </div><!-- #review_form -->
                                        </div><!-- #review_form_wrapper -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end main products area-->

                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                    <div class="widget widget-our-services ">
                        <div class="widget-content">
                            <ul class="our-services">

                                <li class="service">
                                    <a class="link-to-service" href="#">
                                        <i class="fa fa-truck" aria-hidden="true"></i>
                                        <div class="right-content">
                                            <b class="title">Free Shipping</b>
                                            <span class="subtitle">On Oder Over $99</span>
                                            <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                        </div>
                                    </a>
                                </li>

                                <li class="service">
                                    <a class="link-to-service" href="#">
                                        <i class="fa fa-gift" aria-hidden="true"></i>
                                        <div class="right-content">
                                            <b class="title">Special Offer</b>
                                            <span class="subtitle">Get a gift!</span>
                                            <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                        </div>
                                    </a>
                                </li>

                                <li class="service">
                                    <a class="link-to-service" href="#">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                        <div class="right-content">
                                            <b class="title">Order Return</b>
                                            <span class="subtitle">Return within 7 days</span>
                                            <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Categories widget-->

                    <div class="widget mercado-widget widget-product">
                        <h2 class="widget-title">Popular Products</h2>
                        <div class="widget-content">
                            <ul class="products">
                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="detail.html"
                                                title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="assets/image/products/digital_01.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="detail.html"
                                                title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="assets/image/products/digital_17.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="detail.html"
                                                title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="assets/image/products/digital_18.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="detail.html"
                                                title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="assets/image/products/digital_20.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
                <!--end sitebar-->

                <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wrap-show-advance-info-box style-1 box-in-site">
                        <h3 class="title-box">Related Products</h3>
                        <div class="wrap-products">
                            <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                                data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/image/products/digital_04.jpg" width="214"
                                                    height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item new-label">new</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/image/products/digital_17.jpg" width="214"
                                                    height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item sale-label">sale</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><ins>
                                                <p class="product-price">$168.00</p>
                                            </ins> <del>
                                                <p class="product-price">$250.00</p>
                                            </del></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/image/products/digital_15.jpg" width="214"
                                                    height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item new-label">new</span>
                                            <span class="flash-item sale-label">sale</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><ins>
                                                <p class="product-price">$168.00</p>
                                            </ins> <del>
                                                <p class="product-price">$250.00</p>
                                            </del></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/image/products/digital_01.jpg" width="214"
                                                    height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item bestseller-label">Bestseller</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/image/products/digital_21.jpg" width="214"
                                                    height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/image/products/digital_03.jpg" width="214"
                                                    height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item sale-label">sale</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><ins>
                                                <p class="product-price">$168.00</p>
                                            </ins> <del>
                                                <p class="product-price">$250.00</p>
                                            </del></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/image/products/digital_04.jpg" width="214"
                                                    height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item new-label">new</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/image/products/digital_05.jpg" width="214"
                                                    height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item bestseller-label">Bestseller</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--End wrap-products-->
                    </div>
                </div>

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </main>
    <!--main area-->

    <!-- footer -->
    <footer class="text-white mt-5">
        <div class="container">
            <div class="row px-2 pt-5 pb-2 justify-content-around">
                <div class="col-4">
                    <h1 class="mb-4">Logo</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quod, accusantium repudiandae
                        fuga corrupti aspernatur nobis quos magnam.</p>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <div>
                        <h4 class="mb-3">Our Services</h4>
                        <div class="service"><i class="fas fa-hand-point-right mr-2"></i> Service 1</div>
                        <div class="service"><i class="fas fa-hand-point-right mr-2"></i> Service 2</div>
                        <div class="service"><i class="fas fa-hand-point-right mr-2"></i> Service 3</div>
                        <div class="service"><i class="fas fa-hand-point-right mr-2"></i> Service name 4</div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-end">
                    <div>
                        <h4 class="mb-3">Contact with us</h4>
                        <div class="social-icon">
                            <i class="fab fa-facebook-f rounded-circle mr-2"></i>
                            <i class="fab fa-instagram rounded-circle mr-2"></i>
                            <i class="fab fa-twitter rounded-circle mr-2"></i>
                            <i class="fab fa-linkedin-in rounded-circle mr-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- bottom footer -->
        <hr class="container-fluid">
        <div class=" bottom-footer container px-5 py-2">
            <i class="far fa-copyright mx-1 mb-3"></i> RiazulIqbalFeroz@gmail.com. All Rights Reserved.
            <span class="float-right">Developed By Riazul Iqbqal Feroz</span>
        </div>
    </footer>

    <script src="assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/chosen.jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/functions.js"></script>
    <!--footer area-->

    <script src="assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
    <script src="assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.flexslider.js"></script>
    <script src="assets/js/chosen.jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/functions.js"></script>
    <!--footer area-->
</body>

</html>
