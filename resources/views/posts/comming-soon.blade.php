@extends('layouts.app')

@section('content')
<main class="main">
    <div class="page-content">
        <section class="coming-section container text-center text-grey font-primary ">
            <div class="row align-items-center pt-10 pb-10">
                <div class="col-md-6">
                    <img src="images/subpages/coming-soon.jpg" alt="coming soon" width="519" height="568">
                </div>
                <div class="col-md-6 order-md-first">
                    <h1 class="mb-9 ls-m lh-1 font-italic text-uppercase">Coming Soon</h1>
                    <div class="countdown countdown-coming mb-7" data-format="DHMS" data-until="+10d"
                        data-relative="true">00:00:00</div>
                    <hr class="mb-6 ml-8 mr-8">
                    <p>We are currently working on an awesome new site. Stay tuned for more information.
                        Subscribe to our newsletter to stay updated on our progress.</p>
                    <form action="#" class="ml-lg-8 mr-lg-8 mb-8">
                        <input type="email" class="form-control font-primary text-grey" name="email" id="email"
                            placeholder="Enter Your Email Address" required="">
                        <button class="btn btn-primary btn-link btn-icon-right" type="submit">subscribe<i
                                class="d-icon-arrow-right"></i></button>
                    </form>
                    <div class="social-links">
                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                        <a href="#" class="social-link fab fa-instagram"></a>
                        <a href="#" class="social-link fab fa-pinterest"></a>
                        <a href="#" class="social-link fas fa-envelope"></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
