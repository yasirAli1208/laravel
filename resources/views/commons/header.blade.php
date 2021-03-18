
<div class="loading-overlay">
    <div class="bounce-loader">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
        <div class="bounce4"></div>
    </div>
</div>
<div class="page-wrapper">
    <h1 class="d-none">Donald - Responsive eCommerce HTML Template</h1>
    <header class="header header-transparent">
        <div class="header-top">
            <div class="container-fluid">
                <div class="header-left">
                    <div class="social-links inline-links">
                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                        <a href="#" class="social-link social-pinterest fab fa-pinterest-p"></a>
                    </div>
                    <p class="welcome-msg">Welcome to Donald store message or remove it!</p>
                </div>
                <div class="header-right">
                    <a class="call" href="tel:#">
                        Call us: 123-456-7890
                    </a>
                    <!-- End Phone Call -->
                    <span class="divider ml-2"></span>
                    <a href="#" class="contact">Contact us</a>
                    <span class="divider"></span>
                    <div class="dropdown">
                        <a href="#currency" class="text-white">USD</a>
                        <ul class="dropdown-box">
                            <li><a href="#USD">USD</a></li>
                            <li><a href="#EUR">EUR</a></li>
                        </ul>
                    </div>
                    <span class="divider"></span>
                    <!-- End DropDown Menu -->
                    <div class="dropdown language-dropdown">
                        <a href="#language" class="text-white"><img src=" {{asset('assets/images/flags/en.png')}} " alt="USA Flag"
                                class="dropdown-image" />ENG</a>
                        <ul class="dropdown-box">
                            <li>
                                <a href="#USD">
                                    <img src=" {{asset('assets/images/flags/en.png')}} " alt="USA Flag" class="dropdown-image" />ENG
                                </a>
                            </li>
                            <li>
                                <a href="#EUR">
                                    <img src=" {{asset('assets/images/flags/fr.png')}} " alt="France Flag" class="dropdown-image" />FRH
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End HeaderTop -->
        <div class="header-middle sticky-header fix-top sticky-content has-center">
            <div class="container-fluid">
                <div class="header-left">
                    <a href="#" class="mobile-menu-toggle">
                        <i class="d-icon-bars2"></i>
                    </a>
                    <a href="{{ route('index') }}" class="logo d-lg-block d-none">
                        <img src="{{asset('assets/images/demos/demo10/logo.png')}}" alt="logo" width="163" height="39" />
                    </a>
                    <!-- End Logo -->
                </div>
                <div class="header-center">
                    <a href="{{route('index')}}" class="logo d-lg-none d-block">
                        <img src="{{asset('assets/images/demos/demo10/logo.png')}}" alt="logo" width="163" height="39" />
                    </a>
                    <nav class="main-nav mr-0">
                        <ul class="menu menu-active-underline">
                            <li class="active">
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="{{url('about')}}"">About Us</a>
                            </li>
                            <li>
                                <a href="{{url('product')}}">Products</a>
                            </li>
                            <li>
                                <a href="{{url('contact')}}">Contact Us</a>
                            </li>
                            <li>
                                <a href="{{url('blog')}}">Blog</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <div class="header-search hs-toggle">
                        <a href="#" class="search-toggle d-flex align-items-center text-uppercase text-white">
                            <i class="d-icon-search"></i>
                            <span>Search</span>
                        </a>
                        <form action="#" class="input-wrapper">
                            <input type="text" class="form-control" name="search" autocomplete="off"
                                placeholder="Search your keyword..." required />
                            <button class="btn btn-search" type="submit">
                                <i class="d-icon-search"></i>
                            </button>
                        </form>
                    </div>
                    <!-- End Header Search -->
                    <div class="login">
                        <a class="text-white" href="{{url('account')}}">
                            <i class="d-icon-user"></i>
                            <span>Login</span>
                        </a>
                    </div>
                    <!-- End Login -->
                    <div class="dropdown cart-dropdown">
                        <a href="{{url('cart')}}" class="cart-toggle">
                            <span class="cart-label">
                                <span class="cart-name text-white">My Cart</span>
                                <span class="cart-price text-white">$42.00</span>
                            </span>
                            <i class="minicart-icon">
                                <span class="cart-count">2</span>
                            </i>
                        </a>
                        <!-- End Cart Toggle -->
                        <div class="dropdown-box">
                            <div class="product product-cart-header">
                                <span class="product-cart-counts">2 items</span>
                                <span><a href="{{url('cart')}}">View cart</a></span>
                            </div>
                            <div class="products scrollable">
                                <div class="product product-cart">
                                    <div class="product-detail">
                                        <a href="{{url('product')}}" class="product-name">Solid Pattern In Fashion Summer Dress</a>
                                        <div class="price-box">
                                            <span class="product-quantity">1</span>
                                            <span class="product-price">$129.00</span>
                                        </div>
                                    </div>
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{asset('assets/images/cart/product-1.jpg')}}" alt="product" width="90"
                                                height="90" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </figure>
                                </div>
                                <!-- End of Cart Product -->
                                <div class="product product-cart">
                                    <div class="product-detail">
                                        <a href="{{url('product')}}" class="product-name">Mackintosh Poket Backpack</a>
                                        <div class="price-box">
                                            <span class="product-quantity">1</span>
                                            <span class="product-price">$98.00</span>
                                        </div>
                                    </div>
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{asset('assets/images/cart/product-2.jpg')}}" alt="product" width="90"
                                                height="90" />
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
                                <a href="{{url('checkout')}}" class="btn btn-dark"><span>Checkout</span></a>
                            </div>
                            <!-- End of Cart Action -->
                        </div>
                        <!-- End Dropdown Box -->
                    </div>
                </div>
            </div>
        </div>
    </header>

