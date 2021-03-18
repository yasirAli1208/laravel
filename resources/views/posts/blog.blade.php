@extends('layouts.app')

@section('content')
<main class="main">
    <div class="page-header" style="background-image: url(images/page-header.jpg)">
        <h1 class="page-title">Our Blog post</h1>
    </div>
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                <li><a href="#" class="active">Blog</a></li>
                <li>Classic</li>
            </ul>
        </div>
    </nav>
    <div class="page-content mt-6">
        <div class="container">
            <div class="row gutter-lg">
                <div class="col-lg-9">
                    <div class="posts">
                        <article class="post post-lg mb-9">
                            <figure class="post-media">
                                <a href="post-single.html">
                                    <img src="images/blog/1_lg.jpg" width="870" height="420" alt="post" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    <a href="#" class="post-author">by John Doe</a>
                                    |
                                    <a href="#" class="post-date">Nov 22, 2019</a>
                                    |
                                    <a href="#" class="post-comment">2 Comments</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Cras ornare tristique elit</a>
                                </h4>
                                <div class="post-cats">
                                    in <a href="#">Lifestyle</a>, <a href="#">Shopping</a>
                                </div>
                                <p class="post-content">Sed pretium, ligula sollicitudin laoreet viverra, tortor
                                    libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti.
                                    Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue.</p>
                                <a href="post-single.html"
                                    class="btn btn-link btn-underline btn-primary btn-reveal-right">Read more<i
                                        class="d-icon-arrow-right"></i></a>
                            </div>
                        </article>
                        <article class="post post-lg post-video mb-9">
                            <figure class="post-media">
                                <a href="post-single.html">
                                    <img src="images/blog/2_lg.jpg" width="870" height="420" alt="post" />
                                </a>
                                <span class="video-play"></span>
                                <video width="380">
                                    <source src="video/memory-of-a-woman.mp4" type="video/mp4">
                                </video>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    <a href="#" class="post-author">by John Doe</a>
                                    |
                                    <a href="#" class="post-date">Nov 22, 2019</a>
                                    |
                                    <a href="#" class="post-comment">2 Comments</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Vivamus vestibulum ntulla
                                        necante</a></h4>
                                <div class="post-cats">
                                    in <a href="#">Lifestyle</a>
                                </div>
                                <p class="post-content">Sed pretium, ligula sollicitudin laoreet viverra, tortor
                                    libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti.
                                    Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue.</p>
                                <a href="post-single.html"
                                    class="btn btn-link btn-underline btn-primary btn-reveal-right">Read more<i
                                        class="d-icon-arrow-right"></i></a>
                            </div>
                        </article>
                        <article class="post post-lg mb-9">
                            <figure class="post-media">
                                <div class="owl-carousel owl-theme owl-dot-inner owl-dot-white row cols-1 gutter-no"
                                    data-owl-options="{
                                    'items': 1
                                }">
                                    <img src="images/blog/3_lg.jpg" width="870" height="420" alt="post" />
                                    <img src="images/blog/2_lg.jpg" width="870" height="420" alt="post" />
                                    <img src="images/blog/1_lg.jpg" width="870" height="420" alt="post" />
                                </div>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    <a href="#" class="post-author">by John Doe</a>
                                    |
                                    <a href="#" class="post-date">Nov 22, 2019</a>
                                    |
                                    <a href="#" class="post-comment">2 Comments</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Utaliquam sollicitudin leo</a>
                                </h4>
                                <div class="post-cats">
                                    in <a href="#">Fashion</a>, <a href="#">Lifestyle</a>
                                </div>
                                <p class="post-content">Sed pretium, ligula sollicitudin laoreet viverra, tortor
                                    libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti.
                                    Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue.</p>
                                <a href="post-single.html"
                                    class="btn btn-link btn-underline btn-primary btn-reveal-right">Read more<i
                                        class="d-icon-arrow-right"></i></a>
                            </div>
                        </article>
                        <article class="post post-lg mb-9">
                            <figure class="post-media">
                                <a href="post-single.html">
                                    <img src="images/blog/4_lg.jpg" width="870" height="420" alt="post" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    <a href="#" class="post-author">by John Doe</a>
                                    |
                                    <a href="#" class="post-date">Nov 22, 2019</a>
                                    |
                                    <a href="#" class="post-comment">2 Comments</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Fusce pellentesque
                                        suscipit.</a></h4>
                                <div class="post-cats">
                                    in <a href="#">Travel</a>
                                </div>
                                <p class="post-content">Sed pretium, ligula sollicitudin laoreet viverra, tortor
                                    libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti.
                                    Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue.</p>
                                <a href="post-single.html"
                                    class="btn btn-link btn-underline btn-primary btn-reveal-right">Read more<i
                                        class="d-icon-arrow-right"></i></a>
                            </div>
                        </article>
                        <article class="post post-lg mb-9">
                            <figure class="post-media">
                                <a href="post-single.html">
                                    <img src="images/blog/5_lg.jpg" width="870" height="420" alt="post" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    <a href="#" class="post-author">by John Doe</a>
                                    |
                                    <a href="#" class="post-date">Nov 22, 2019</a>
                                    |
                                    <a href="#" class="post-comment">2 Comments</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Aenean dignissim pellentesque
                                        felis.</a></h4>
                                <div class="post-cats">
                                    in <a href="#">Travel</a>, <a href="#">Hobbies</a>
                                </div>
                                <p class="post-content">Sed pretium, ligula sollicitudin laoreet viverra, tortor
                                    libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti.
                                    Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue.</p>
                                <a href="post-single.html"
                                    class="btn btn-link btn-underline btn-primary btn-reveal-right">Read more<i
                                        class="d-icon-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>
                    <ul class="pagination mb-10 pb-4">
                        <li class="page-item disabled">
                            <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
                                aria-disabled="true">
                                <i class="d-icon-arrow-left"></i>Prev
                            </a>
                        </li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                            <a class="page-link page-link-next" href="#" aria-label="Next">
                                Next<i class="d-icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <aside class="col-lg-3 right-sidebar blog-sidebar sidebar-fixed sticky-sidebar-wrapper">
                    <div class="sidebar-overlay">
                        <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
                    </div>
                    <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-left"></i></a>
                    <div class="sidebar-content">
                        <div class="sticky-sidebar" data-sticky-options="{'top': 89, 'bottom': 70}">
                            <div class="widget widget-search mb-5">
                                <form action="#" class="input-wrapper input-wrapper-inline btn-absolute">
                                    <input type="text" class="form-control" name="search" autocomplete="off"
                                        placeholder="Search in blog" required />
                                    <button class="btn btn-search btn-link" type="submit">
                                        <i class="d-icon-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="widget widget-categories">
                                <h3 class="widget-title">Blog Categories</h3>
                                <ul class="widget-body filter-items search-ul">
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Sport</a></li>
                                    <li>
                                        <a href="#" class="show">Shopping</a>
                                        <ul style="display: block">
                                            <li><a href="#">Summer Sale</a></li>
                                            <li><a href="#">Winter Sale</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Uncategorized</a></li>
                                </ul>
                            </div>
                            <div class="widget widget-posts mb-5">
                                <h3 class="widget-title">Popular Posts</h3>
                                <div class="widget-body">
                                    <div class="post-col">
                                        <div class="post post-list-sm">
                                            <figure class="post-media">
                                                <a href="post-single.html">
                                                    <img src="images/blog/1_xs.jpg" width="100" height="100"
                                                        alt="post" />
                                                </a>
                                            </figure>
                                            <div class="post-details">
                                                <div class="post-meta">
                                                    <a href="#" class="post-date">Feb 11, 2020</a>
                                                </div>
                                                <h4 class="post-title"><a href="post-single.html">Lorem ipsum
                                                        dolor sim ectur adipiscing</a></h4>
                                            </div>
                                        </div>
                                        <div class="post post-list-sm">
                                            <figure class="post-media">
                                                <a href="post-single.html">
                                                    <img src="images/blog/2_xs.jpg" width="100" height="100"
                                                        alt="post" />
                                                </a>
                                            </figure>
                                            <div class="post-details">
                                                <div class="post-meta">
                                                    <a href="#" class="post-date">Jan 11, 2020</a>
                                                </div>
                                                <h4 class="post-title"><a href="post-single.html">Vel pretium
                                                        lectus qua id leo in vitae</a></h4>
                                            </div>
                                        </div>
                                        <div class="post post-list-sm">
                                            <figure class="post-media">
                                                <a href="post-single.html">
                                                    <img src="images/blog/3_xs.jpg" width="100" height="100"
                                                        alt="post" />
                                                </a>
                                            </figure>
                                            <div class="post-details">
                                                <div class="post-meta">
                                                    <a href="#" class="post-date">Feb 11, 2020</a>
                                                </div>
                                                <h4 class="post-title"><a href="post-single.html">Sagittis id
                                                        consectetur purus ut.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget-about mb-4">
                                <h3 class="widget-title">About us</h3>
                                <div class="widget-body">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                        nonummy nibh euismod tincidunt.</p>
                                </div>
                            </div>

                            <div class="widget widget-posts">
                                <h3 class="widget-title">Tag Cloud</h3>
                                <div class="widget-body">
                                    <a href="#" class="tag">Bag</a>
                                    <a href="#" class="tag">Classic</a>
                                    <a href="#" class="tag">Converse</a>
                                    <a href="#" class="tag">Leather</a>
                                    <a href="#" class="tag">Fit</a>
                                    <a href="#" class="tag">Green</a>
                                    <a href="#" class="tag">Diesel</a>
                                    <a href="#" class="tag">Jack and Jones</a>
                                    <a href="#" class="tag">Jeans</a>
                                    <a href="#" class="tag">Jumper</a>
                                    <a href="#" class="tag">Man</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</main>
@endsection
