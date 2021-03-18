@extends('layouts.app')

@section('content')
<main class="main">
    <div class="page-header" style="background-image: url(images/page-header.jpg)">
        <h1 class="page-title">About Us</h1>
    </div>
    <div class="page-content mt-10 pt-7">
        <section class="about-section">
            <div class="container">
                <h2 class="title mb-lg-9">About Donald Store</h2>
                <div class="row mb-10">
                    <div class="col-md-6">
                        <img class="w-100 mb-4 appear-animate"
                            data-animation-options="{'name':'fadeInLeftShorter'}"
                            src="{{asset('assets/images/subpages/about.jpg')}}" alt="Donald Store" width="587" height="517"
                            style="position: sticky; top: 2rem;">
                    </div>
                    <div class="col-md-6 order-md-first pt-md-5">
                        <p class="text-uppercase text-grey mb-0">Who we are</p>
                        <h5 class="lh-1 ls-m">Has long and glorious history</h5>
                        <p class="font-primary font-weight-semi-bold">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Morbi ut tellus ante. Nam suscipit urna risus, fermentum commodo
                            ipsum porta id.</p>
                        <p class="mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet
                            libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci
                            semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus,
                            molestie nunc.</p>

                        <div class="row pl-xl-6 pr-xl-8 mb-6">
                            <div class="counter text-primary text-center col-sm-4 col-md-6 col-lg-4">
                                <span class="count-to" data-to="35" data-refresh-interval="50">0</span>
                                <h5 class="count-title">Business Year</h5>
                            </div>
                            <div class="counter text-primary text-center col-sm-4 col-md-6 col-lg-4">
                                <span class="count-to" data-to="50" data-refresh-interval="50">0</span>
                                <h5 class="count-title">Design Brands</h5>
                            </div>
                            <div class="counter text-primary text-center col-sm-4 col-md-12 col-lg-4">
                                <span class="count-to" data-to="130" data-refresh-interval="50">0</span>
                                <h5 class="count-title">Team Members</h5>
                            </div>
                        </div>
                        <ul
                            class="list list-circle row cols-sm-2 cols-md-1 cols-xl-2 font-weight-bold text-dark font-primary mb-4">
                            <li class="appear-animate"
                                data-animation-options="{'name': 'fadeInRightShorter','delay':'.4s'}"><i
                                    class="fa fa-check"></i>Pellentesque ultricies nibh</li>
                            <li class="appear-animate" data-animation-options="{'name': 'fadeInRightShorter'}">
                                <i class="fa fa-check"></i>Pellentesque ultricies nibh</li>
                            <li class="appear-animate"
                                data-animation-options="{'name': 'fadeInRightShorter','delay':'.5s'}"><i
                                    class="fa fa-check"></i>Ultricies nibh pellen</li>
                            <li class="appear-animate"
                                data-animation-options="{'name': 'fadeInRightShorter','delay':'.3s'}"><i
                                    class="fa fa-check"></i>Ultricies nibh pellen</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section-->

        <section class="reviews-section grey-section pt-10 pb-10">
            <div class="container appear-animate" data-animation-options="{'name':'fadeInRightShorter'}">
                <h2 class="title mt-2">Customers Reviews</h2>
                <div class="owl-carousel owl-shadow-carousel owl-same-height owl-theme row cols-lg-3 cols-sm-2 cols-1 pb-4"
                    data-owl-options="{
                    'items': 3,
                    'nav': false,
                    'dots': true,
                    'loop': false,
                    'margin': 20,
                    'responsive': {
                        '0': {
                            'items': 1
                        },
                        '576': {
                            'items': 2
                        },
                        '992': {
                            'items': 3,
                            'dots': false
                        }
                    }
                }">
                    <div class="testimonial testimonial-centered bg-white">
                        <div class="testimonial-info">
                            <h3 class="testimonial-title">Highly Recommend</h3>
                            <figure class="testimonial-author-thumbnail">
                                <img src="{{asset('assets/images/subpages/reviewer-1.png')}}" alt="user" width="70" height="70" />
                            </figure>
                            <blockquote>“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus
                                hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque ”</blockquote>
                            <cite>
                                Herman Beck
                                <span>Customer</span>
                            </cite>
                        </div>
                    </div>
                    <div class="testimonial testimonial-centered bg-white">
                        <div class="testimonial-info">
                            <h3 class="testimonial-title">Very Helpful</h3>
                            <figure class="testimonial-author-thumbnail">
                                <img src="{{asset('assets/images/subpages/reviewer-2.png')}}" alt="user" width="70" height="70" />
                            </figure>
                            <blockquote>“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus
                                hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque ”</blockquote>
                            <cite>
                                Mary Adams
                                <span>Customer</span>
                            </cite>
                        </div>
                    </div>
                    <div class="testimonial testimonial-centered bg-white">
                        <div class="testimonial-info">
                            <h3 class="testimonial-title">Great theme and Support</h3>
                            <figure class="testimonial-author-thumbnail">
                                <img src="{{asset('assets/images/subpages/reviewer-3.png')}}" alt="user" width="70" height="70" />
                            </figure>
                            <blockquote>“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus
                                hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque ”</blockquote>
                            <cite>
                                Owen Hunt
                                <span>Customer</span>
                            </cite>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Reviews Section -->
        <section class="team-section pt-10 pb-9">
            <div class="container">
                <h2 class="title mt-2">Meet our support team</h2>
                <div class="row cols-sm-2 cols-md-4">
                    <div class="member appear-animate" data-animation-options="{'name': 'fadeInLeftShorter'}">
                        <figure>
                            <img src="{{asset('assets/images/subpages/team1.jpg')}}" alt="team member" width="280" height="280">
                            <div class="overlay social-links">
                                <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                            </div>
                        </figure>
                        <h4 class="member-name">David Smith</h4>
                        <h5 class="member-job">Ceo / Founder</h5>
                    </div>
                    <div class="member appear-animate"
                        data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.3s'}">
                        <figure>
                            <img src="{{asset('assets/images/subpages/team2.jpg')}}" alt="team member" width="280" height="280">
                            <div class="overlay social-links">
                                <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                            </div>
                        </figure>
                        <h4 class="member-name">Dylan Chavez</h4>
                        <h5 class="member-job">Support manager / Founder</h5>
                    </div>
                    <div class="member appear-animate"
                        data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.4s'}">
                        <figure>
                            <img src="{{asset('assets/images/subpages/team3.jpg')}}" alt="team member" width="280" height="280">
                            <div class="overlay social-links">
                                <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                            </div>
                        </figure>
                        <h4 class="member-name">Christina Fuller</h4>
                        <h5 class="member-job">Supporter</h5>
                    </div>
                    <div class="member appear-animate"
                        data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.5s'}">
                        <figure>
                            <img src="{{asset('assets/images/subpages/team4.jpg')}}" alt="team member" width="280" height="280">
                            <div class="overlay social-links">
                                <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                            </div>
                        </figure>
                        <h4 class="member-name">David Smith</h4>
                        <h5 class="member-job">Support</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Section -->

        <section class="clients-section grey-section pt-10 pb-10">
            <div class="container">
                <h2 class="title mt-3">Our Clients</h2>
                <div class="owl-carousel owl-theme row brand-carousel cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2 gutter-no pt-1"
                    data-owl-options="{
                    'items': 7,
                    'nav': false,
                    'dots': false,
                    'autoplay': true,
                    'margin': 30,
                    'loop': true,
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
                    <figure><img src="{{asset('assets/images/brands/1.png')}} " alt="brand" width="180" height="100" /></figure>
                    <figure><img src="{{asset('assets/images/brands/2.png')}} " alt="brand" width="180" height="100" /></figure>
                    <figure><img src="{{asset('assets/images/brands/3.png')}} " alt="brand" width="180" height="100" /></figure>
                    <figure><img src="{{asset('assets/images/brands/4.png')}} " alt="brand" width="180" height="100" /></figure>
                    <figure><img src="{{asset('assets/images/brands/5.png')}} " alt="brand" width="180" height="100" /></figure>
                    <figure><img src="{{asset('assets/images/brands/6.png')}} " alt="brand" width="180" height="100" /></figure>
                </div>
            </div>
        </section>
        <!-- End Clients Section -->
    </div>
</main>
@endsection
