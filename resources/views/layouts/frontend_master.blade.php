<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from d-themes.com/html/donald/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jan 2021 05:45:53 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Donald - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Donald - Bootstrap eCommerce Template">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: { families: ['Open+Sans:400,600,700', 'Poppins:400,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>



    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets') }}/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets') }}/vendor/animate/animate.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets') }}/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets') }}/vendor/owl-carousel/owl.carousel.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets') }}/css/demo1.min.css">
</head>

<!-- <body class="home"> -->

    <div class="page-wrapper">
        <h1 class="d-none">Donald - Responsive eCommerce HTML Template</h1>
        <header class="header">
            {{-- <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">Welcome to Donald store message or remove it!</p>
                    </div>
                    <div class="header-right">
                        <div class="dropdown">
                            <a href="#currency">USD</a>
                            <ul class="dropdown-box">
                                <li><a href="#USD">USD</a></li>
                                <li><a href="#EUR">EUR</a></li>
                            </ul>
                        </div>
                        <!-- End of DropDown Menu -->
                        <div class="dropdown">
                            <a href="#language"><img src="images/flags/en.png" alt="USA Flag"
                                    class="dropdown-image" />ENG</a>
                            <ul class="dropdown-box">
                                <li>
                                    <a href="#USD">
                                        <img src="images/flags/en.png" alt="USA Flag" class="dropdown-image" />ENG
                                    </a>
                                </li>
                                <li>
                                    <a href="#EUR">
                                        <img src="images/flags/fr.png" alt="France Flag" class="dropdown-image" />FRH
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End of DropDown Menu -->
                        <div class="dropdown dropdown-expanded d-lg-show">
                            <a href="#dropdown">Links</a>
                            <ul class="dropdown-box">
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Newsletter</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </div>
                        <!-- End of DropDownExpanded Menu -->
                    </div>
                </div>
            </div> --}}
            <!-- End of HeaderTop -->
            <div class="header-middle sticky-header fix-top sticky-content">
                <div class="container">
                    <div class="header-left">
                        <a href="#" class="mobile-menu-toggle">
                            <i class="d-icon-bars2"></i>
                        </a>
                    </div>
                    <div class="header-center">
                        <a href="demo1.html" class="logo">
                            <img src="{{ asset('frontend_assets') }}/images/logo.png" alt="logo" width="163" height="39" />
                        </a>
                        <!-- End of Logo -->
                        <nav class="main-nav">
                            <ul class="menu">
                                <li class="@yield('home')">
                                    <a href="{{ url('/') }}">Home</a>
                                </li >
                                <li class="@yield('shop')">
                                    <a href="{{ url('shop') }}">Shop</a>
                                    {{-- <div class="megamenu">
                                        <div class="row">
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                                <h4 class="menu-title">Variations 1</h4>
                                                <ul>
                                                    <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                                    <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                                    <li><a href="shop-infinite-scroll.html">Infinite Ajaxscroll</a></li>
                                                    <li><a href="shop-horizontal-filter.html">Horizontal Filter</a>
                                                    </li>
                                                    <li><a href="shop-navigation-filter.html">Navigation Filter<span
                                                                class="tip tip-hot">Hot</span></a></li>

                                                    <li><a href="shop-off-canvas.html">Off-Canvas Filter</a></li>
                                                    <li><a href="shop-right-sidebar.html">Right Toggle Sidebar</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                                <h4 class="menu-title">Variations 2</h4>
                                                <ul>

                                                    <li><a href="shop-grid-3cols.html">3 Columns Mode<span
                                                                class="tip tip-new">New</span></a></li>
                                                    <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                                    <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                                    <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                                    <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                                    <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                                    <li><a href="shop-list.html">List Mode</a></li>
                                                </ul>
                                            </div>
                                            <div
                                                class="col-6 col-sm-4 col-md-3 col-lg-4 menu-banner menu-banner1 banner banner-fixed">
                                                <figure>
                                                    <img src="images/menu/banner-1.jpg" alt="Menu banner" width="221"
                                                        height="330" />
                                                </figure>
                                                <div class="banner-content y-50">
                                                    <h4 class="banner-subtitle font-weight-bold text-primary ls-m">Sale.
                                                    </h4>
                                                    <h3 class="banner-title font-weight-bold"><span
                                                            class="text-uppercase">Up to</span>70% Off</h3>
                                                    <a href="#" class="btn btn-link btn-underline">shop now<i
                                                            class="d-icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                            <!-- End of Megamenu -->
                                        </div>
                                    </div> --}}
                                </li>
                                {{-- <li> --}}
                                    {{-- <a href="product.html">Products</a> --}}
                                    {{-- <div class="megamenu">
                                        <div class="row">
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                                <h4 class="menu-title">Product Pages</h4>
                                                <ul>
                                                    <li><a href="product-simple.html">Simple Product</a></li>
                                                    <li><a href="product.html">Variable Product</a></li>
                                                    <li><a href="product-sale.html">Sale Product</a></li>
                                                    <li><a href="product-featured.html">Featured &amp; On Sale</a></li>

                                                    <li><a href="product-left-sidebar.html">With Left Sidebar</a></li>
                                                    <li><a href="product-right-sidebar.html">With Right Sidebar</a></li>
                                                    <li><a href="product-sticky-cart.html">Add Cart Sticky<span
                                                                class="tip tip-hot">Hot</span></a></li>
                                                    <li><a href="product-tabinside.html">Tab Inside</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                                <h4 class="menu-title">Product Layouts</h4>
                                                <ul>
                                                    <li><a href="product-grid.html">Grid Images<span
                                                                class="tip tip-new">New</span></a></li>
                                                    <li><a href="product-masonry.html">Masonry</a></li>
                                                    <li><a href="product-gallery.html">Gallery Type</a></li>
                                                    <li><a href="product-full.html">Full Width Layout</a></li>
                                                    <li><a href="product-sticky.html">Sticky Info</a></li>
                                                    <li><a href="product-sticky-both.html">Left &amp; Right Sticky</a>
                                                    </li>
                                                    <li><a href="product-horizontal.html">Horizontal Thumb</a></li>

                                                    <li><a href="#">Build Your Own</a></li>
                                                </ul>
                                            </div>
                                            <div
                                                class="col-6 col-sm-4 col-md-3 col-lg-4 menu-banner menu-banner2 banner banner-fixed">
                                                <figure>
                                                    <img src="images/menu/banner-2.jpg" alt="Menu banner" width="221"
                                                        height="330" />
                                                </figure>
                                                <div class="banner-content x-50 text-center">
                                                    <h3 class="banner-title text-white text-uppercase">Sunglasses</h3>
                                                    <h4 class="banner-subtitle font-weight-bold text-white mb-0">$23.00
                                                        -
                                                        $120.00</h4>
                                                </div>
                                            </div>
                                            <!-- End of MegaMenu -->
                                        </div>
                                    </div> --}}
                                {{-- </li> --}}
                                <li class="@yield('pages')">
                                    <a href="#">Pages</a>
                                    {{-- <ul>
                                        <li><a href="about-us.html">About</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="account.html">Login</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="error-404.html">Error 404</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul> --}}
                                </li>
                                <li class="@yield('blog')">
                                    <a href="#">Blog</a>
                                    {{-- <ul>
                                        <li><a href="blog-classic.html">Classic</a></li>
                                        <li><a href="blog-listing.html">Listing</a></li>
                                        <li>
                                            <a href="#">Grid</a>
                                            <ul>
                                                <li><a href="blog-grid-2col.html">Grid 2 columns</a></li>
                                                <li><a href="blog-grid-3col.html">Grid 3 columns</a></li>
                                                <li><a href="blog-grid-4col.html">Grid 4 columns</a></li>
                                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Masonry</a>
                                            <ul>
                                                <li><a href="blog-masonry-2col.html">Masonry 2 columns</a></li>
                                                <li><a href="blog-masonry-3col.html">Masonry 3 columns</a></li>
                                                <li><a href="blog-masonry-4col.html">Masonry 4 columns</a></li>
                                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Mask</a>
                                            <ul>
                                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="post-single.html">Single Post</a>
                                        </li>
                                    </ul> --}}
                                </li>
                                {{-- <li class="d-xl-show">
                                    <a href="#">Elements</a>
                                    <ul>
                                        <li><a href="element-products.html">Products</a></li>
                                        <li><a href="element-typography.html">Typography</a></li>
                                        <li><a href="element-titles.html">Titles</a></li>
                                        <li><a href="element-categories.html">Product Category</a></li>
                                        <li><a href="element-buttons.html">Buttons</a></li>
                                        <li><a href="element-accordions.html">Accordions</a></li>
                                        <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                                        <li><a href="element-tabs.html">Tabs</a></li>
                                        <li><a href="element-testimonials.html">Testimonials</a></li>
                                        <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                        <li><a href="element-instagrams.html">Instagrams</a></li>
                                        <li><a href="element-cta.html">Call to Action</a></li>
                                        <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                        <li><a href="element-icons.html">Icons</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li>
                                    <a href="#">Buy Donald!</a>
                                </li> --}}
                            </ul>
                        </nav>
                        {{-- <span class="divider"></span> --}}
                        <!-- End of Divider -->
                        {{-- <div class="header-search hs-toggle">
                            <a href="#" class="search-toggle">
                                <i class="d-icon-search"></i>
                            </a>
                            <form action="#" class="input-wrapper">
                                <input type="text" class="form-control" name="search" autocomplete="off"
                                    placeholder="Search your keyword..." required />
                                <button class="btn btn-search" type="submit">
                                    <i class="d-icon-search"></i>
                                </button>
                            </form>
                        </div> --}}
                        <!-- End of Header Search -->
                    </div>
                    <div class="header-right">
                        <a  href="{{ url('login') }}">
                            <i class="d-icon-user"></i>
                            <span>Login</span>
                        </a>
                        <span class="divider"></span>
                        <a  href="{{ url('customerReg') }}">
                            <i class="d-icon-user"></i>
                            <span>Customer register</span>
                        </a>
                        <!-- End of Login -->
                        <span class="divider"></span>
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="cart-toggle">
                                <span class="cart-label">
                                    <span class="cart-name">My Cart</span>
                                    <span class="cart-price"></span>
                                </span>
                                <i class="minicart-icon">
                                    <span class="cart-count">{{ App\Cart::where('ip_address', request()->ip())->count() }}</span>
                                </i>
                            </a>
                            <!-- End of Cart Toggle -->
                            <div class="dropdown-box">
                                <div class="product product-cart-header">
                                    <span class="product-cart-counts">{{ App\Cart::where('ip_address', request()->ip())->count() }} items</span>
                                    <span><a href="{{ url('cart') }}">View cart</a></span>
                                </div>
                                <div class="products scrollable">
                                  @php
                                    $sub_total = 0;
                                  @endphp
                                  @foreach (App\Cart::where('ip_address',request()->ip())->get() as $cart)

                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name"> {{ App\Product::find($cart->product_id)->name }}</a>
                                            <div class="price-box">
                                                <span class="product-quantity">{{$cart->quantity}}</span>
                                                <span class="product-price">{{ App\Product::find($cart->product_id)->price }}</span>
                                                <span class="product-price">{{ " = " }}</span>
                                                <span class="product-price">{{ App\Product::find($cart->product_id)->price * $cart->quantity}}</span>
                                            </div>
                                            @php
                                              $sub_total = $sub_total + (App\Product::find($cart->product_id)->price * $cart->quantity);
                                            @endphp
                                        </div>
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{ asset('uploads/product') }}/{{ App\Product::find($cart->product_id)->thumbnail_photo }}" alt="product" width="90"
                                                    height="90" />
                                            </a>
                                            <a href="{{ url('deleteCart') }}/{{ $cart->id }}" class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </figure>
                                    </div>
                                  @endforeach

                                </div>
                                <!-- End of Products  -->
                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price">${{ $sub_total }}</span>
                                </div>
                                <!-- End of Cart Total -->
                                <div class="cart-action">
                                    <a href="{{ url('cart') }}" class="btn btn-dark"><span>Cart</span></a>
                                </div>
                                <!-- End of Cart Action -->
                            </div>
                            <!-- End of Dropdown Box -->
                        </div>

                        {{-- <div class="header-search hs-toggle mobile-search">
                            <a href="#" class="search-toggle">
                                <i class="d-icon-search"></i>
                            </a>
                            <form action="#" class="input-wrapper">
                                <input type="text" class="form-control" name="search" autocomplete="off"
                                    placeholder="Search your keyword..." required />
                                <button class="btn btn-search" type="submit">
                                    <i class="d-icon-search"></i>
                                </button>
                            </form>
                        </div> --}}
                        <!-- End of Header Search -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End of Header -->
        @yield('frontend_content')
        <!-- End of Main -->
        <footer class="footer appear-animate">
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="demo1.html" class="logo-footer">
                                <img src="{{ asset('frontend_assets') }}/images/logo-footer.png" alt="logo-footer" width="163" height="39" />
                            </a>
                            <!-- End of FooterLogo -->
                        </div>
                        <div class="col-lg-9">
                            <div class="widget widget-newsletter form-wrapper form-wrapper-inline">
                                <div class="newsletter-info mx-auto mr-lg-2 ml-lg-4">
                                    <h4 class="widget-title">Subscribe to our Newsletter</h4>
                                    <p>Get all the latest information on Events, Sales and Offers.</p>
                                </div>
                                <form action="#" class="input-wrapper input-wrapper-inline">
                                    <input type="email" class="form-control" name="email" id="newsletter-email1"
                                        placeholder="Email address here..." required />
                                    <button class="btn btn-primary btn-md ml-2" type="submit">subscribe<i
                                            class="d-icon-arrow-right"></i></button>
                                </form>
                            </div>
                            <!-- End of Newsletter -->
                        </div>
                    </div>
                </div>
                <!-- End of FooterTop -->
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <h4 class="widget-title">Contact Info</h4>
                                <ul class="widget-body">
                                    <li>
                                        <label>Phone:</label>
                                        <a href="#">Toll Free (123) 456-7890</a>
                                    </li>
                                    <li>
                                        <label>Email:</label>
                                        <a href="#">mail@donald.com</a>
                                    </li>
                                    <li>
                                        <label>Address:</label>
                                        <a href="#">123 Street Name, City, England</a>
                                    </li>
                                    <li>
                                        <label>WORKING DAYS/HOURS</label>
                                    </li>
                                    <li>
                                        <a href="#">Mon - Sun / 9:00 AM - 8:00 PM</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End of Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget ml-lg-4">
                                <h4 class="widget-title">My Account</h4>
                                <ul class="widget-body">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Custom Service</a></li>
                                    <li><a href="#">Terms &amp; Condition</a></li>
                                </ul>
                            </div>
                            <!-- End of Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget ml-lg-4">
                                <h4 class="widget-title">Contact Info</h4>
                                <ul class="widget-body">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Custom Service</a></li>
                                    <li><a href="#">Terms &amp; Condition</a></li>
                                </ul>
                            </div>
                            <!-- End of Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget-instagram">
                                <h4 class="widget-title">Instagram</h4>
                                <figure class="widget-body row">
                                    <div class="col-3">
                                        <img src="{{ asset('frontend_assets') }}/images/instagram/01.jpg" alt="instagram 1" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('frontend_assets') }}/images/instagram/02.jpg" alt="instagram 2" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('frontend_assets') }}/images/instagram/03.jpg" alt="instagram 3" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('frontend_assets') }}/images/instagram/04.jpg" alt="instagram 4" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('frontend_assets') }}/images/instagram/05.jpg" alt="instagram 5" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('frontend_assets') }}/images/instagram/06.jpg" alt="instagram 6" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('frontend_assets') }}/images/instagram/07.jpg" alt="instagram 7" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('frontend_assets') }}/images/instagram/08.jpg" alt="instagram 8" width="64" height="64" />
                                    </div>
                                </figure>
                            </div>
                            <!-- End of Instagram -->
                        </div>
                    </div>
                </div>
                <!-- End of FooterMiddle -->
                <div class="footer-bottom">
                    <div class="footer-left">
                        <figure class="payment">
                            <img src="{{ asset('frontend_assets') }}/images/payment.png" alt="payment" width="159" height="29" />
                        </figure>
                    </div>
                    <div class="footer-center">
                        <p class="copyright">Donald eCommerce &copy; 2020. All Rights Reserved</p>
                    </div>
                    <div class="footer-right">
                        <div class="social-links">
                            <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                            <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                        </div>
                    </div>
                </div>
                <!-- End of FooterBottom -->
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    {{-- <!-- Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo1.html" class="sticky-link active">
            <i class="d-icon-home"></i>
            <span>Home</span>
        </a>
        <a href="shop.html" class="sticky-link">
            <i class="d-icon-volume"></i>
            <span>Categories</span>
        </a>
        <a href="wishlist.html" class="sticky-link">
            <i class="d-icon-heart"></i>
            <span>Wishlist</span>
        </a>
        <a href="account.html" class="sticky-link">
            <i class="d-icon-user"></i>
            <span>Account</span>
        </a>
        <div class="dropdown cart-dropdown dir-up">
            <a href="cart.html" class="sticky-link cart-toggle">
                <i class="d-icon-bag"></i>
                <span>Cart</span>
            </a>
            <!-- End of Cart Toggle -->
            <div class="dropdown-box">
                <div class="product product-cart-header">
                    <span class="product-cart-counts">2 items</span>
                    <span><a href="cart.html">View cart</a></span>
                </div>
                <div class="products scrollable">
                    <div class="product product-cart">
                        <div class="product-detail">
                            <a href="product.html" class="product-name">Solid Pattern In Fashion Summer Dress</a>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$129.00</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="images/cart/product-1.jpg" alt="product" width="90" height="90" />
                            </a>
                            <button class="btn btn-link btn-close">
                                <i class="fas fa-times"></i>
                            </button>
                        </figure>
                    </div>
                    <!-- End of Cart Product -->
                    <div class="product product-cart">
                        <div class="product-detail">
                            <a href="product.html" class="product-name">Mackintosh Poket Backpack</a>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$98.00</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="images/cart/product-2.jpg" alt="product" width="90" height="90" />
                            </a>
                            <button class="btn btn-link btn-close">
                                <i class="fas fa-times"></i>
                            </button>
                        </figure>
                    </div>
                    <!-- End of Cart Product -->
                </div>
                <!-- End of Products  -->
                <div class="cart-total">
                    <label>Subtotal:</label>
                    <span class="price">$42.00</span>
                </div>
                <!-- End of Cart Total -->
                <div class="cart-action">
                    <a href="checkout.html" class="btn btn-dark"><span>Checkout</span></a>
                </div>
                <!-- End of Cart Action -->
            </div>
            <!-- End of Dropdown Box -->
        </div>
    </div>
    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="fas fa-chevron-up"></i></a>

    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End of Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End of CloseButton -->
        <div class="mobile-menu-container scrollable">
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li class="active">
                    <a href="demo1.html">Home</a>
                </li>
                <li>
                    <a href="shop.html">Categories</a>
                    <ul>
                        <li>
                            <a href="#">
                                Variations 1
                            </a>
                            <ul>
                                <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                <li><a href="shop-infinite-scroll.html">Infinite Ajaxscroll</a></li>
                                <li><a href="shop-horizontal-filter.html">Horizontal Filter</a></li>
                                <li><a href="shop-navigation-filter.html">Navigation Filter<span
                                            class="tip tip-hot">Hot</span></a></li>

                                <li><a href="shop-off-canvas.html">Off-Canvas Filter</a></li>
                                <li><a href="shop-right-sidebar.html">Right Toggle Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Variations 2
                            </a>
                            <ul>

                                <li><a href="shop-grid-3cols.html">3 Columns Mode<span
                                            class="tip tip-new">New</span></a></li>
                                <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                <li><a href="shop-list.html">List Mode</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="product.html">Products</a>
                    <ul>
                        <li>
                            <a href="#">Product Pages</a>
                            <ul>
                                <li><a href="product-simple.html">Simple Product</a></li>
                                <li><a href="product.html">Variable Product</a></li>
                                <li><a href="product-sale.html">Sale Product</a></li>
                                <li><a href="product-featured.html">Featured &amp; On Sale</a></li>

                                <li><a href="product-left-sidebar.html">With Left Sidebar</a></li>
                                <li><a href="product-right-sidebar.html">With Right Sidebar</a></li>
                                <li><a href="product-sticky-cart.html">Add Cart Sticky<span
                                            class="tip tip-hot">Hot</span></a></li>
                                <li><a href="product-tabinside.html">Tab Inside</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Layouts</a>
                            <ul>
                                <li><a href="product-grid.html">Grid Images<span class="tip tip-new">New</span></a></li>
                                <li><a href="product-masonry.html">Masonry</a></li>
                                <li><a href="product-gallery.html">Gallery Type</a></li>
                                <li><a href="product-full.html">Full Width Layout</a></li>
                                <li><a href="product-sticky.html">Sticky Info</a></li>
                                <li><a href="product-sticky-both.html">Left &amp; Right Sticky</a></li>
                                <li><a href="product-horizontal.html">Horizontal Thumb</a></li>

                                <li><a href="#">Build Your Own</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul>
                        <li><a href="about-us.html">About</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="account.html">Login</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="error-404.html">Error 404</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog</a>
                    <ul>
                        <li><a href="blog-classic.html">Classic</a></li>
                        <li><a href="blog-listing.html">Listing</a></li>
                        <li>
                            <a href="#">Grid</a>
                            <ul>
                                <li><a href="blog-grid-2col.html">Grid 2 columns</a></li>
                                <li><a href="blog-grid-3col.html">Grid 3 columns</a></li>
                                <li><a href="blog-grid-4col.html">Grid 4 columns</a></li>
                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Masonry</a>
                            <ul>
                                <li><a href="blog-masonry-2col.html">Masonry 2 columns</a></li>
                                <li><a href="blog-masonry-3col.html">Masonry 3 columns</a></li>
                                <li><a href="blog-masonry-4col.html">Masonry 4 columns</a></li>
                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Mask</a>
                            <ul>
                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="post-single.html">Single Post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">ELements</a>
                    <ul>
                        <li><a href="element-products.html">Products</a></li>
                        <li><a href="element-typography.html">Typography</a></li>
                        <li><a href="element-titles.html">Titles</a></li>
                        <li><a href="element-categories.html">Product Category</a></li>
                        <li><a href="element-buttons.html">Buttons</a></li>
                        <li><a href="element-accordions.html">Accordions</a></li>
                        <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                        <li><a href="element-tabs.html">Tabs</a></li>
                        <li><a href="element-testimonials.html">Testimonials</a></li>
                        <li><a href="element-blog-posts.html">Blog Posts</a></li>
                        <li><a href="element-instagrams.html">Instagrams</a></li>
                        <li><a href="element-cta.html">Call to Action</a></li>
                        <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                        <li><a href="element-icons.html">Icons</a></li>
                    </ul>
                </li>
                <li><a href="#">Buy Donald!</a></li>
            </ul>
            <!-- End of MobileMenu -->
            <!-- <ul class="mobile-menu mmenu-anim">
                <li><a href="login.html">Login</a></li>
                <li><a href="cart.html">My Cart</a></li>
                <li><a href="wishlist.html">Wishlist</a></li>
            </ul> -->
            <!-- End of MobileMenu -->
        </div>
    </div> --}}
    <!-- Plugins JS File -->
    <script src="{{ asset('frontend_assets') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/vendor/parallax/parallax.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="{{ asset('frontend_assets') }}/vendor/owl-carousel/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="{{ asset('frontend_assets') }}/js/main.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#apply-coupon-btn').click(function(){
          var coupon_text = $('#coupon_text').val();
          var link_to_go = "{{ url('coupon') }}/"+coupon_text;
          window.location.href = link_to_go;
        });
      });
    </script>
</body>


<!-- Mirrored from d-themes.com/html/donald/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jan 2021 05:46:13 GMT -->
</html>
