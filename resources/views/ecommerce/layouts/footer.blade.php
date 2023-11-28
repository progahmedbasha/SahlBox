<div class="container-fluid primary_nav_bar_background_color secondary_text_color mt-5 pt-5">
<div class="container">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h5 class="secondary_text_color text-uppercase mb-4">Get In Touch</h5>
            <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed
                dolor. Rebum tempor no vero est magna amet no</p>
            <p class="mb-2"><i class="fa fa-map-marker-alt icon_color mr-3"></i>{{ $basic->configuration['address'] }}</p>
            <p class="mb-2"><i class="fa fa-envelope icon_color mr-3"></i>{{ $basic->configuration['email'] }}</p>
            <p class="mb-0"><i class="fa fa-phone-alt icon_color mr-3"></i>+{{ $basic->configuration['phone'] }}</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <h5 class="secondary_text_color text-uppercase mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="secondary_text_color mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="secondary_text_color mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our
                            Shop</a>
                        <a class="secondary_text_color mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop
                            Detail</a>
                        <a class="secondary_text_color mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping
                            Cart</a>
                        <a class="secondary_text_color mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="secondary_text_color mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        <a class="secondary_text_color mb-2" href="{{ route('term-conditions') }}"><i class="fa fa-angle-right mr-2"></i>Terms and Conditions</a>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <h5 class="secondary_text_color text-uppercase mb-4">Newsletter</h5>
                    <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                        </div>
                    </form>
                    <h6 class="secondary_text_color text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        @foreach ($social->configuration as $key => $value)
                            <x-ecommerce.a-scocial-icon href="{{ $value }}"><i class="fab fa-{{ $key }}"></i></x-ecommerce.a-scocial-icon>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left secondary_text_color">
                &copy; <a class="icon_color" href="#">Domain</a>. All Rights Reserved. Powered
                by
                <a class="icon_color" href="#">Tager</a>
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="{{ url('ecommerce/img/payments.png') }}" alt="">
        </div>
    </div>
</div>
</div>