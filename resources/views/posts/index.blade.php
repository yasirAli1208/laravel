@extends('layouts.app')

@section('content')
    <main class="main">
        <div class="page-content">
            <section class="intro-section">
                <div class="owl-carousel owl-theme row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1"
                    data-owl-options="{
                    'items': 1,
                    'nav': false,
                    'loop': true,
                    'dots': true
                }">
                    <div class="intro-slide1 banner banner-fixed"
                        style="background-image: url({{asset('assets/images/demos/demo10/slides/1.jpg')}}); background-color: #666">
                        <div class="banner-content mt-4 x-50 y-50 text-center">
                            <h4 class="banner-subtitle mb-0 font-weight-normal text-uppercase text-white slide-animate"
                                data-animation-options="{'name': 'fadeIn', 'duration': '1.2s'}">New collection</h4>
                            <h3 class="banner-title font-secondary text-uppercase ls-m text-white slide-animate"
                                data-animation-options="{'name': 'fadeInUp', 'duration': '1.2s', 'delay': '.8s'}">
                                Shop women's 2020</h3>
                            <p class="text-white mb-3 slide-animate"
                                data-animation-options="{'name': 'fadeInUp', 'duration': '1.2s', 'delay': '1.1s'}">
                                International Delivery From Just $99.00</p>
                            <a href="#" class="btn btn-outline btn-white slide-animate"
                                data-animation-options="{'name': 'fadeInUp', 'duration': '1.2s', 'delay': '1.3s'}">Shop
                                women</a>
                        </div>
                    </div>
                    <div class="intro-slide2 banner banner-fixed"
                        style="background-image: url({{asset('assets/images/demos/demo10/slides/2.jpg')}}); background-color: #666">
                        <div class="banner-content x-50 y-50 text-center">
                            <h3 class="banner-title font-secondary text-white text-uppercase slide-animate"
                                data-animation-options="{'name': 'fadeIn', 'duration': '2s', 'delay': '.3s'}">Brand
                                Lookbook 2020</h3>
                            <p class="text-white slide-animate"
                                data-animation-options="{'name': 'fadeIn', 'duration': '1.5s', 'delay': '.9s'}">
                                International Delivery From Just $99.00</p>
                            <a href="#" class="btn btn-dark slide-animate"
                                data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1s'}">Discover
                                now<i class="d-icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row gutter-no">
                    <div class="col-lg-3 col-sm-6">
                        <div class="intro-banner1 banner banner-fixed">
                            <figure></figure>
                            <div class="banner-content y-50 appear-animate">
                                <h3
                                    class="banner-title font-secondary font-weight-normal text-uppercase text-white">
                                    Buy 2, <strong class="text-primary">Get 1 Free*</strong><br />on everything</h3>
                                <p class="text-white">Add 3 products to cart, Terms apply</p>
                                <a href="#" class="btn btn-outline btn-white">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="category category-absolute category-overlay overlay-dark text-white"
                            style="background-color: #333">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="{{asset('assets/images/demos/demo10/categories/1.jpg')}}" alt="category" width="480"
                                        height="391" />
                                </figure>
                            </a>
                            <div class="category-content x-50 y-50 appear-animate">
                                <h4 class="category-name text-uppercase">For women's</h4>
                                <span class="category-count text-uppercase">
                                    <span>9</span> Products
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 order-lg-last order-sm-auto order-last">
                        <div class="category category-absolute category-overlay overlay-dark text-white"
                            style="background-color: #333">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="{{asset('assets/images/demos/demo10/categories/2.jpg')}}" alt="category" width="480"
                                        height="391" />
                                </figure>
                            </a>
                            <div class="category-content x-50 y-50 appear-animate">
                                <h4 class="category-name text-uppercase">Men's collection</h4>
                                <span class="category-count text-uppercase">
                                    <span>19</span> Products
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="intro-banner2 banner banner-fixed">
                            <figure></figure>
                            <div class="banner-content y-50 appear-animate">
                                <h4 class="banner-subtitle text-uppercase text-primary font-weight-bold">Best
                                    Sellers</h4>
                                <h3
                                    class="banner-title font-secondary font-weight-normal mb-7 text-uppercase text-white">
                                    20% off everything,<br /><strong>Even Sale!</strong></h3>
                                <a href="#" class="btn btn-outline btn-white">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container mt-10 pt-3">
                <h2 class="title title-simple">Featured Item</h2>
                <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-2" data-owl-options="{
                    'items': 4,
                    'nav': false,
                    'dots': true,
                    'margin': 20,
                    'loop': false,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '768': {
                            'items': 3
                        },
                        '992': {
                            'items': 4
                        }
                    }
                }">
                    <div class="product product-classic appear-animate" data-animation-options="{
                        'name': 'fadeInUpShorter',
                        'delay': '.3s'
                    }">
                        <figure class="product-media">
                            <a href="demo10-product.html">
                                <img src="{{asset('assets/images/demos/demo10/products/1.jpg')}}" alt="product" width="280"
                                    height="315">
                            </a>
                            <div class="product-label-group">
                                <label class="product-label label-new">new</label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="shop-grid-3col.html">categories</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo10-product.html">Fashion Suede Handbag</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$123.00</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart">add to cart</a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
                                        class="d-icon-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product product-classic appear-animate" data-animation-options="{
                        'name': 'fadeInUpShorter',
                        'delay': '.4s'
                    }">
                        <figure class="product-media">
                            <a href="demo10-product.html">
                                <img src="{{asset('assets/images/demos/demo10/products/2.jpg')}}" alt="product" width="280"
                                    height="315">
                            </a>
                            <div class="product-label-group">
                                <label class="product-label label-sale">27% off</label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="shop-grid-3col.html">categories</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo10-product.html">Women's Fashion Handbag</a>
                            </h3>
                            <div class="product-price">
                                <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart">add to cart</a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
                                        class="d-icon-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product product-classic appear-animate" data-animation-options="{
                        'name': 'fadeInUpShorter',
                        'delay': '.5s'
                    }">
                        <figure class="product-media">
                            <a href="demo10-product.html">
                                <img src="{{asset('assets/images/demos/demo10/products/3.jpg')}}" alt="product" width="280"
                                    height="315">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="shop-grid-3col.html">categories</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo10-product.html">Men's Fashion Bag</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$111.00</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart">add to cart</a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
                                        class="d-icon-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product product-classic appear-animate" data-animation-options="{
                        'name': 'fadeInUpShorter',
                        'delay': '.6s'
                    }">
                        <figure class="product-media">
                            <a href="demo10-product.html">
                                <img src="{{asset('assets/images/demos/demo10/products/4.jpg')}}" alt="product" width="280"
                                    height="315">
                            </a>
                            <div class="product-label-group">
                                <label class="product-label label-new">New</label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="shop-grid-3col.html">categories</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo10-product.html">Women's Suede Handbag</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$223.00</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart">add to cart</a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
                                        class="d-icon-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="banner banner-cta parallax mt-10" data-image-src="{{asset('assets/images/demos/demo10/parallax.jpg')}}"
                style="background-color: #565352">
                <div class="banner-content text-center appear-animate">
                    <h4 class="banner-subtitle text-primary text-uppercase font-weight-bold">Today’s special</h4>
                    <h3 class="banner-title font-secondary text-white text-uppercase">Fashion Watches Collection
                    </h3>
                    <p class="text-white">Free shipping on clearance orders of $75 or more</p>
                    <a href="#" class="btn btn-outline btn-white">Discover now</a>
                </div>
            </section>
            <section class="products-section container pt-4 mt-10 pb-4 mb-10">
                <div class="row gutter-no align-items-center">
                    <div class="col-lg-6">
                        <div class="row gutter-no">
                            <div class="col-xs-6">
                                <div class="banner banner-fixed banner-sm appear-animate" data-animation-options="{
                                    'name': 'fadeIn',
                                    'delay': '.3s'
                                }" style="background-color: #565352">
                                    <figure>
                                        <img src="{{asset('assets/images/demos/demo10/categories/3.jpg')}}" alt="banner" />
                                    </figure>
                                    <div class="banner-content text-center x-50 y-50">
                                        <h3 class="banner-title font-secondary text-uppercase text-white">Calvin
                                        </h3>
                                        <h4 class="banner-subtitle font-secondary text-uppercase text-white">Shoes
                                            collection</h4>
                                        <a href="#" class="btn btn-outline btn-white">Shop Calvin</a>
                                    </div>
                                </div>
                                <div class="banner banner-fixed banner-sm appear-animate" data-animation-options="{
                                    'name': 'fadeIn',
                                    'delay': '.1s'
                                }" style="background-color: #565352">
                                    <figure>
                                        <img src="{{asset('assets/images/demos/demo10/categories/4.jpg')}}" alt="banner" />
                                    </figure>
                                    <div class="banner-content text-center x-50 y-50">
                                        <h3 class="banner-title font-secondary text-uppercase text-white">Nike</h3>
                                        <h4 class="banner-subtitle font-secondary text-uppercase text-white">Shoes
                                            collection</h4>
                                        <a href="#" class="btn btn-outline btn-white">Shop Nike</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="banner banner-fixed appear-animate" data-animation-options="{
                                    'name': 'fadeIn',
                                    'delay': '.5s'
                                }" style="background-color: #565352">
                                    <figure>
                                        <img src="{{asset('assets/images/demos/demo10/categories/5.jpg')}}" alt="banner" />
                                    </figure>
                                    <div class="banner-content text-center x-50 y-50">
                                        <h3 class="banner-title font-secondary text-uppercase text-white">OGP</h3>
                                        <h4 class="banner-subtitle font-secondary text-uppercase text-white">
                                            Shoes collection</h4>
                                        <a href="#" class="btn btn-outline btn-white">Shop OGP</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="product-wrapper appear-animate" data-animation-options="{
                            'delay': '.6s'
                        }">
                            <h2 class="title title-simple">Shoes Collection</h2>
                            <div class="owl-carousel owl-theme row owl-nav-full cols-2" data-owl-options="{
                                'items': 2,
                                'nav': true,
                                'dots': false,
                                'loop': false,
                                'margin': 20
                            }">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="demo10-product.html">
                                            <img src="{{asset('assets/images/demos/demo10/products/5.jpg')}}" alt="product" width="219"
                                                height="240">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="demo10-product.html">Brown Suede Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$35.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="demo10-product.html">
                                            <img src="{{asset('assets/images/demos/demo10/products/6.jpg')}}" alt="product" width="219"
                                                height="240">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="demo10-product.html">Brown Leather Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$35.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter-no align-items-center">
                    <div class="col-lg-6">
                        <div class="row gutter-no">
                            <div class="col-xs-6">
                                <div class="banner banner-fixed appear-animate" data-animation-options="{
                                    'name': 'fadeIn',
                                    'delay': '.1s'
                                }" style="background-color: #565352">
                                    <figure>
                                        <img src="{{asset('assets/images/demos/demo10/categories/6.jpg')}}" alt="banner" />
                                    </figure>
                                    <div class="banner-content text-center x-50 y-50">
                                        <h3 class="banner-title font-secondary text-uppercase text-white">Nike</h3>
                                        <h4 class="banner-subtitle font-secondary text-uppercase text-white">
                                            Sportwear collection</h4>
                                        <a href="#" class="btn btn-outline btn-white">Shop Nike</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="banner banner-fixed banner-sm appear-animate" data-animation-options="{
                                    'name': 'fadeIn',
                                    'delay': '.3s'
                                }" style="background-color: #565352">
                                    <figure>
                                        <img src="{{asset('assets/images/demos/demo10/categories/7.jpg')}}" alt="banner" />
                                    </figure>
                                    <div class="banner-content text-center x-50 y-50">
                                        <h3 class="banner-title font-secondary text-uppercase text-white">EBag</h3>
                                        <h4 class="banner-subtitle font-secondary text-uppercase text-white">Bag
                                            collection</h4>
                                        <a href="#" class="btn btn-outline btn-white">Shop EBag</a>
                                    </div>
                                </div>
                                <div class="banner banner-fixed banner-sm appear-animate" data-animation-options="{
                                    'name': 'fadeIn',
                                    'delay': '.4s'
                                }" style="background-color: #565352">
                                    <figure>
                                        <img src="{{asset('assets/images/demos/demo10/categories/8.jpg')}}" alt="banner" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-wrapper appear-animate" data-animation-options="{
                            'delay': '.6s'
                        }">
                            <h2 class="title title-simple">Bags Collection</h2>
                            <div class="owl-carousel owl-theme row owl-nav-full cols-2" data-owl-options="{
                                'items': 2,
                                'nav': true,
                                'dots': false,
                                'loop': false,
                                'margin': 20
                            }">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="demo10-product.html">
                                            <img src="{{asset('assets/images/demos/demo10/products/1.jpg')}}" alt="product" width="219"
                                                height="240">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="demo10-product.html">Fashion Suede Handbag</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$35.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="demo10-product.html">
                                            <img src="{{asset('assets/images/demos/demo10/products/2.jpg')}}" alt="product" width="219"
                                                height="240">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">categories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="demo10-product.html">Women's Fashion Handbag</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$35.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="banner banner-newsletter parallax" data-option="{'offset': -100}"
                data-image-src="{{asset('assets/images/demos/demo10/newsletter.jpg')}}" style="background-color: #565352">
                <div class="banner-content text-center appear-animate">
                    <h3 class="banner-title font-secondary ls-m text-white text-uppercase">Subscribe to our
                        newsletter</h3>
                    <p class="text-uppercase text-white">30% off everything online
                    <p>
                    <form action="#" class="input-wrapper input-wrapper-inline">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Enter Your E-mail Address..." required />
                        <button class="btn btn-dark" type="submit">Sign up</button>
                    </form>
                </div>
            </section>
            <section class="container mt-10 pt-3 appear-animate">
                <h2 class="title title-simple">Best Sellers</h2>
                <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-2" data-owl-options="{
                    'items': 4,
                    'nav': false,
                    'dots': true,
                    'margin': 20,
                    'loop': false,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '768': {
                            'items': 3
                        },
                        '992': {
                            'items': 4
                        }
                    }
                }">
                    <div class="product product-classic appear-animate" data-animation-options="{
                        'name': 'fadeInRightShorter',
                        'delay': '.5s'
                    }">
                        <figure class="product-media">
                            <a href="demo10-product.html">
                                <img src="{{asset('assets/images/demos/demo10/products/5_bg.jpg')}}" alt="product" width="280"
                                    height="315">
                            </a>
                            <div class="product-label-group">
                                <label class="product-label label-new">new</label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="shop-grid-3col.html">categories</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo10-product.html">Brown Suede Shoes</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$123.00</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart">add to cart</a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
                                        class="d-icon-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product product-classic appear-animate" data-animation-options="{
                        'name': 'fadeInRightShorter',
                        'delay': '.3s'
                    }">
                        <figure class="product-media">
                            <a href="demo10-product.html">
                                <img src="{{asset('assets/images/demos/demo10/products/9.jpg')}}" alt="product" width="280"
                                    height="315">
                            </a>
                            <div class="product-label-group">
                                <label class="product-label label-sale">27% off</label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="shop-grid-3col.html">categories</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo10-product.html">Fashion Training Shoes</a>
                            </h3>
                            <div class="product-price">
                                <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart">add to cart</a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
                                        class="d-icon-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product product-classic appear-animate" data-animation-options="{
                        'name': 'fadeInLeftShorter',
                        'delay': '.3s'
                    }">
                        <figure class="product-media">
                            <a href="demo10-product.html">
                                <img src="{{asset('assets/images/demos/demo10/products/10.jpg')}}" alt="product" width="280"
                                    height="315">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="shop-grid-3col.html">categories</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo10-product.html">Fashion Yellow Training Shoes</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$111.00</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart">add to cart</a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
                                        class="d-icon-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product product-classic appear-animate" data-animation-options="{
                        'name': 'fadeInLeftShorter',
                        'delay': '.5s'
                    }">
                        <figure class="product-media">
                            <a href="demo10-product.html">
                                <img src="{{asset('assets/images/demos/demo10/products/11.jpg')}}" alt="product" width="280"
                                    height="315">
                            </a>
                            <div class="product-label-group">
                                <label class="product-label label-new">New</label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="shop-grid-3col.html">categories</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo10-product.html">Women's Fashion Handbag</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$223.00</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart">add to cart</a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
                                        class="d-icon-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pt-10 appear-animate">
                <h2 class="title title-simple d-none">Instagram</h2>
                <div class="owl-carousel owl-theme row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2 gutter-no"
                    data-owl-options="{
                    'items': 6,
                    'nav': false,
                    'dots': false,
                    'autoplay': true,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '576': {
                            'items': 3
                        },
                        '768': {
                            'items': 4
                        },
                        '992': {
                            'items': 5
                        },
                        '1200': {
                            'items': 6
                        }
                    }
                }">
                    <figure class="instagram">
                        <a href="#">
                            <img src="{{asset('assets/images/demos/demo10/instagram/1.jpg')}}" alt="Instagram" width="320"
                                height="320" />
                        </a>
                    </figure>
                    <figure class="instagram">
                        <a href="#">
                            <img src="{{asset('assets/images/demos/demo10/instagram/2.jpg')}}" alt="Instagram" width="320"
                                height="320" />
                        </a>
                    </figure>
                    <figure class="instagram">
                        <a href="#">
                            <img src="{{asset('assets/images/demos/demo10/instagram/3.jpg')}}" alt="Instagram" width="320"
                                height="320" />
                        </a>
                    </figure>
                    <figure class="instagram">
                        <a href="#">
                            <img src="{{asset('assets/images/demos/demo10/instagram/4.jpg')}}" alt="Instagram" width="320"
                                height="320" />
                        </a>
                    </figure>
                    <figure class="instagram">
                        <a href="#">
                            <img src="{{asset('assets/images/demos/demo10/instagram/5.jpg')}}" alt="Instagram" width="320"
                                height="320" />
                        </a>
                    </figure>
                    <figure class="instagram">
                        <a href="#">
                            <img src="{{asset('assets/images/demos/demo10/instagram/6.jpg')}}" alt="Instagram" width="320"
                                height="320" />
                        </a>
                    </figure>
                </div>
            </section>
        </div>
    </main>
@endsection
