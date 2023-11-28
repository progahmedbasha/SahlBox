<div class="container-fluid primary_nav_bar_background_color mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between secondary_nav_bar_background_color w-100" data-toggle="collapse"
                href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    <div class="nav-item dropdown dropright">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses <i
                                class="fa fa-angle-right float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            <a href="" class="dropdown-item">Men's Dresses</a>
                            <a href="" class="dropdown-item">Women's Dresses</a>
                            <a href="" class="dropdown-item">Baby's Dresses</a>
                        </div>
                    </div>
                    <a href="" class="nav-item nav-link">Shirts</a>
                    <a href="" class="nav-item nav-link">Jeans</a>
                    <a href="" class="nav-item nav-link">Swimwear</a>
                    <a href="" class="nav-item nav-link">Sleepwear</a>
                    <a href="" class="nav-item nav-link">Sportswear</a>
                    <a href="" class="nav-item nav-link">Jumpsuits</a>
                    <a href="" class="nav-item nav-link">Blazers</a>
                    <a href="" class="nav-item nav-link">Jackets</a>
                    <a href="" class="nav-item nav-link">Shoes</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg primary_nav_bar_background_color navbar-dark py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                    <span class="h1 text-uppercase text-light secondary_nav_bar_background_color px-2 ml-n1">Shop</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link {{ Route::is('home') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('shop') }}" class="nav-item nav-link {{ Route::is('shop') ? 'active' : '' }}">Shop</a>
                        {{-- <a href="{{ route('shop-details')}}" class="nav-item nav-link {{ Route::is('shop-details') ? 'active' : '' }}">Shop Detail</a> --}}
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i
                                    class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu secondary_nav_bar_background_color rounded-0 border-0 m-0">
                                <a href="{{ route('shopping-cart') }}" class="dropdown-item">Shopping Cart</a>
                                <a href="{{ route('orders.index') }}" class="dropdown-item">My Orders</a>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">Contact</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="{{ route('favorites') }}" class="btn px-0">
                            <i class="fas fa-heart icon_color"></i>
                            <span class="badge secondary_text_color border border-secondary rounded-circle"
                                style="padding-bottom: 2px;">{{ $favorite_products }}</span>
                        </a>
                        <a href="{{ route('shopping-cart') }}" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart icon_color"></i>
                            <span class="badge secondary_text_color border border-secondary rounded-circle"
                                style="padding-bottom: 2px;">{{ $cart_products }}</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>