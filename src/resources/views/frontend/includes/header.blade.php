<!-- Top bar -->
<div class="topbar">
    <div class="container d-flex">

        <!-- service contact -->
        <nav class="nav d-none d-md-flex"> <!-- hidden on xs -->
            <a class="nav-link pl-0" href="javascript:void(0)"><i data-feather="phone"></i> +880163-5183372</a>
            <a class="nav-link" href="javascript:void(0)"><i data-feather="mail"></i> support@OSP.com</a>
        </nav>

        <!-- social media -->
        <nav class="nav">
            <a class="nav-link pr-2 pl-0" href="javascript:void(0)"><i data-feather="facebook"></i></a>
            <a class="nav-link px-2" href="javascript:void(0)"><i data-feather="twitter"></i></a>
            <a class="nav-link px-2" href="javascript:void(0)"><i data-feather="instagram"></i></a>
        </nav>

        <!-- language -->
        <nav class="nav nav-lang ml-auto"> <!-- push it to the right -->
            <a class="nav-link active" href="javascript:void(0)">EN</a>
            <a class="nav-link pipe">|</a>
            <a class="nav-link" href="javascript:void(0)">RU</a>
        </nav>

        <!-- User dropdown -->
        <ul class="nav">
            <li class="nav-item dropdown dropdown-hover">
                <a class="nav-link dropdown-toggle pr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="user"></i> Hi, John <i data-feather="chevron-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <div class="media p-2 align-items-center mb-2">
                        <div class="mr-2 size50x50"><img src="{{ asset('frontend/') }}/img/user/user.svg" alt="user" class="img-thumbnail rounded-circle mr-2 size50x50"></div>
                        <div class="media-body">
                            <strong>Guest User</strong>
                            <div class="small">guest@example.com</div>
                        </div>
                    </div>
                    <a href="account-orders.html" class="dropdown-item has-icon"><i data-feather="shopping-cart"></i>My Orders</a>
                    <a href="account-wishlist.html" class="dropdown-item has-icon has-badge"><i data-feather="heart"></i>Wishlist <span class="badge rounded badge-primary">2</span></a>
                    <a href="account-profile.html" class="dropdown-item has-icon"><i data-feather="settings"></i>Account Setting</a>
                    <div class="dropdown-divider"></div>
                    <a href="account-login.html" class="dropdown-item has-icon text-danger"><i data-feather="log-out"></i>Logout</a>
                    @else
                        <div class="media p-2 align-items-center mb-2">
                            <div class="mr-2 size50x50"><img src="{{ asset('frontend/') }}/img/user/user.svg" alt="user" class="img-thumbnail rounded-circle mr-2 size50x50"></div>
                            <div class="media-body">
                                <strong>Guest User</strong>
                                <div class="small">guest@example.com</div>
                            </div>
                        </div>
                        <a href="/login" class="dropdown-item has-icon text-danger"><i data-feather="log-in"></i>Login</a>
                    @endif
                </div>
            </li>
        </ul>
        <!-- /User dropdown -->

    </div><!-- /.container -->
</div>
<!-- /Top bar -->


<!--Header -->
<header>
    <div class="container">

        <!-- Sidebar toggler -->
        <a class="nav-link nav-icon ml-ni nav-toggler mr-3 d-flex d-lg-none" href="#" data-toggle="modal" data-target="#menuModal"><i data-feather="menu"></i></a>

        <!-- Logo -->
        <a class="nav-link nav-logo" href="{{ route('frontend.index') }}"><strong>OSP</strong></a>

        <!-- Main navigation -->
        <ul class="nav nav-main ml-auto d-none d-lg-flex"> <!-- hidden on md -->
            <li class="nav-item"><a class="nav-link active" href="{{ route('frontend.index') }}">Home</a></li>
            <li class="nav-item dropdown dropdown-hover">
                <a class="nav-link dropdown-toggle forwardable" data-toggle="dropdown" href="shop-categories.html" role="button" aria-haspopup="true" aria-expanded="false">
                    Shop <i data-feather="chevron-down"></i>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="shop-categories.html">Shop Categories</a>
                    <a class="dropdown-item" href="shop-grid.html">Shop Grid</a>
                    <a class="dropdown-item" href="shop-list.html">Shop List</a>
                    <a class="dropdown-item" href="shop-single.html">Single Product</a>
                    <a class="dropdown-item" href="shop-single2.html">Single Product v2</a>
                    <a class="dropdown-item" href="cart.html">Cart</a>
                    <a class="dropdown-item" href="shipping.html">Checkout</a>
                    <div class="dropdown-submenu">
                        <a class="dropdown-item" href="#">Submenu</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0)">item #1</a>
                            <a class="dropdown-item" href="javascript:void(0)">item #2</a>
                            <a class="dropdown-item" href="javascript:void(0)">item #3</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <!-- /Main navigation -->

    </div><!-- /.container -->
</header>
<!-- /Header -->
