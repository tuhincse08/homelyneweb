
<header class="pb-md-4 pb-0">
    <div class="header-top">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-3 d-xxl-block d-none">
                    <div class="top-left-header">
                        <i class="iconly-Location icli text-white"></i>
                        <span class="text-white">{{ \App\CentralLogics\Helpers::get_settings('address') }}</span>
                    </div>
                </div>

                <div class="col-xxl-6 col-lg-9 d-lg-block d-none">
                    <div class="header-offer">
                        <div class="notification-slider">
                            <div>
                                <div class="timer-notification">
                                    <h6><strong class="me-1">Welcome to HomeLyne!</strong>Wrap new offers/gift
                                        every signle day on Weekends.<strong class="ms-1">New Coupon Code: Fast024
                                        </strong>

                                    </h6>
                                </div>
                            </div>

                            <div>
                                <div class="timer-notification">
                                    <h6>Something you love is now on sale!
                                        <a href="shop-left-sidebar.html" class="text-white">Buy Now
                                            !</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <!--ul class="about-list right-nav-about">
                        <li class="right-nav-list">
                            <div class="dropdown theme-form-select">
                                <button class="btn dropdown-toggle" type="button" id="select-language"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/front/images/country/united-states.png')}}"
                                         class="img-fluid blur-up lazyload" alt="">
                                    <span>English</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="select-language">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)" id="english">
                                            <img src="{{ asset('assets/front/images/country/united-kingdom.png')}}"
                                                 class="img-fluid blur-up lazyload" alt="">
                                            <span>English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)" id="france">
                                            <img src="{{ asset('assets/front/images/country/germany.png')}}"
                                                 class="img-fluid blur-up lazyload" alt="">
                                            <span>Germany</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)" id="chinese">
                                            <img src="{{ asset('assets/front/images/country/turkish.png')}}"
                                                 class="img-fluid blur-up lazyload" alt="">
                                            <span>Turki</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="right-nav-list">
                            <div class="dropdown theme-form-select">
                                <button class="btn dropdown-toggle" type="button" id="select-dollar"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>USD</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end sm-dropdown-menu"
                                    aria-labelledby="select-dollar">
                                    <li>
                                        <a class="dropdown-item" id="aud" href="javascript:void(0)">AUD</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" id="eur" href="javascript:void(0)">EUR</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" id="cny" href="javascript:void(0)">CNY</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul-->
                </div>
            </div>
        </div>
    </div>

    <div class="top-nav top-header sticky-header">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="navbar-top">
                        <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                        </button>
                        <a href="{{ url('/') }}" class="web-logo nav-logo">
                            <img src="{{ asset('assets/front/images/logo/Homelyne.png')}}" class="img-fluid blur-up lazyload" alt="">
                        </a>

                        <div class="middle-box">
                            <div class="location-box">
                                <button class="btn location-button" data-bs-toggle="modal"
                                        data-bs-target="#locationModal">
                                        <span class="location-arrow">
                                            <i data-feather="map-pin"></i>
                                        </span>
                                    <span class="locat-name">Select Zone</span>
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                            </div>

                            <div class="search-box">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="I'm searching for..."
                                           aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn" type="button" id="button-addon2">
                                        <i data-feather="search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rightside-box">
                            <div class="search-full">
                                <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                    <input type="text" class="form-control search-type" placeholder="Search here..">
                                    <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                                </div>
                            </div>
                            <ul class="right-side-menu">
                                <li class="right-side">
                                    <div class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <div class="search-box">
                                                <i data-feather="search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-side">
                                    <a href="contact-us.html" class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <i data-feather="phone-call"></i>
                                        </div>
                                        <div class="delivery-detail">
                                            <h6>24/7 Delivery</h6>
                                            <h5>{{ \App\CentralLogics\Helpers::get_settings('phone') }}</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="right-side">
                                    <a href="{{ url('/wishlist') }}" class="btn p-0 position-relative header-wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                                <li class="right-side">
                                    <div class="onhover-dropdown header-badge">
                                        <button type="button" class="btn p-0 position-relative header-wishlist">
                                            <i data-feather="shopping-cart"></i>
                                            <span class="position-absolute top-0 start-100 translate-middle badge">2
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                        </button>

                                        <div class="onhover-div">
                                            <ul class="cart-list">
                                                <li class="product-box-contain">
                                                    <div class="drop-cart">
                                                        <a href="product-left-thumbnail.html" class="drop-image">
                                                            <img src="{{ asset('assets/front/images/vegetable/product/1.png')}}"
                                                                 class="blur-up lazyload" alt="">
                                                        </a>

                                                        <div class="drop-contain">
                                                            <a href="product-left-thumbnail.html">
                                                                <h5>Fantasy Crunchy Choco Chip Cookies</h5>
                                                            </a>
                                                            <h6><span>1 x</span> $80.58</h6>
                                                            <button class="close-button close_button">
                                                                <i class="fa-solid fa-xmark"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="product-box-contain">
                                                    <div class="drop-cart">
                                                        <a href="product-left-thumbnail.html" class="drop-image">
                                                            <img src="{{ asset('assets/front/images/vegetable/product/2.png')}}"
                                                                 class="blur-up lazyload" alt="">
                                                        </a>

                                                        <div class="drop-contain">
                                                            <a href="product-left-thumbnail.html">
                                                                <h5>Peanut Butter Bite Premium Butter Cookies 600 g
                                                                </h5>
                                                            </a>
                                                            <h6><span>1 x</span> $25.68</h6>
                                                            <button class="close-button close_button">
                                                                <i class="fa-solid fa-xmark"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <div class="price-box">
                                                <h5>Total :</h5>
                                                <h4 class="theme-color fw-bold">$106.58</h4>
                                            </div>

                                            <div class="button-group">
                                                <a href="{{ url('/cart') }}" class="btn btn-sm cart-button">View Cart</a>
                                                <a href="{{ url('/checkout') }}" class="btn btn-sm cart-button theme-bg-color
                                                    text-white">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-side onhover-dropdown">
                                    <div class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                        <div class="delivery-detail">
                                            <h6>Hello,</h6>
                                            <h5>My Account</h5>
                                        </div>
                                    </div>

                                    <div class="onhover-div onhover-div-login">
                                        <ul class="user-box-name">
                                            <li class="product-box-contain">
                                                <i></i>
                                                <a href="{{ url('/login') }}">Log In</a>
                                            </li>

                                            <li class="product-box-contain">
                                                <a href="{{ url('/register') }}">Register</a>
                                            </li>

                                            <li class="product-box-contain">
                                                <a href="{{ url('/forgot') }}">Forgot Password</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="header-nav">
                    <div class="header-nav-left">
                        <button class="dropdown-category">
                            <i data-feather="align-left"></i>
                            <span>All Categories</span>
                        </button>

                        <div class="category-dropdown">
                            <div class="category-title">
                                <h5>Categories</h5>
                                <button type="button" class="btn p-0 close-button text-content">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>

                            <ul class="category-list">
                                <li class="onhover-category-list">
                                    <a href="javascript:void(0)" class="category-name">
                                        <img src="{{ asset('assets/front/svg/1/vegetable.svg')}}" alt="">
                                        <h6>Vegetables & Fruit</h6>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>

                                    <div class="onhover-category-box">
                                        <div class="list-1">
                                            <div class="category-title-box">
                                                <h5>Organic Vegetables</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Potato & Tomato</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Cucumber & Capsicum</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Leafy Vegetables</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Root Vegetables</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Beans & Okra</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Cabbage & Cauliflower</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Gourd & Drumstick</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Specialty</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="list-2">
                                            <div class="category-title-box">
                                                <h5>Fresh Fruit</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Banana & Papaya</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Kiwi, Citrus Fruit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Apples & Pomegranate</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Seasonal Fruits</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Mangoes</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Fruit Baskets</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="onhover-category-list">
                                    <a href="javascript:void(0)" class="category-name">
                                        <img src="{{ asset('assets/front/svg/1/cup.svg')}}" alt="">
                                        <h6>Beverages</h6>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>

                                    <div class="onhover-category-box w-100">
                                        <div class="list-1">
                                            <div class="category-title-box">
                                                <h5>Energy & Soft Drinks</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Soda & Cocktail Mix</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Soda & Cocktail Mix</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Sports & Energy Drinks</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Non Alcoholic Drinks</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Packaged Water</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Spring Water</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Flavoured Water</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="onhover-category-list">
                                    <a href="javascript:void(0)" class="category-name">
                                        <img src="{{ asset('assets/front/svg/1/meats.svg')}}" alt="">
                                        <h6>Meats & Seafood</h6>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>

                                    <div class="onhover-category-box">
                                        <div class="list-1">
                                            <div class="category-title-box">
                                                <h5>Meat</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Fresh Meat</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Frozen Meat</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Marinated Meat</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Fresh & Frozen Meat</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="list-2">
                                            <div class="category-title-box">
                                                <h5>Seafood</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Fresh Water Fish</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Dry Fish</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Frozen Fish & Seafood</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Marine Water Fish</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Canned Seafood</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Prawans & Shrimps</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Other Seafood</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="onhover-category-list">
                                    <a href="javascript:void(0)" class="category-name">
                                        <img src="{{ asset('assets/front/svg/1/breakfast.svg')}}" alt="">
                                        <h6>Breakfast & Dairy</h6>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>

                                    <div class="onhover-category-box">
                                        <div class="list-1">
                                            <div class="category-title-box">
                                                <h5>Breakfast Cereals</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Oats & Porridge</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Kids Cereal</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Muesli</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Flakes</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Granola & Cereal Bars</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Instant Noodles</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Pasta & Macaroni</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Frozen Non-Veg Snacks</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="list-2">
                                            <div class="category-title-box">
                                                <h5>Dairy</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Milk</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Curd</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Paneer, Tofu & Cream</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Butter & Margarine</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Condensed, Powdered Milk</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Buttermilk & Lassi</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Yogurt & Shrikhand</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Flavoured, Soya Milk</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="onhover-category-list">
                                    <a href="javascript:void(0)" class="category-name">
                                        <img src="{{ asset('assets/front/svg/1/frozen.svg')}}" alt="">
                                        <h6>Frozen Foods</h6>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>

                                    <div class="onhover-category-box w-100">
                                        <div class="list-1">
                                            <div class="category-title-box">
                                                <h5>Noodle, Pasta</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Instant Noodles</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Hakka Noodles</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Cup Noodles</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Vermicelli</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Instant Pasta</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="onhover-category-list">
                                    <a href="javascript:void(0)" class="category-name">
                                        <img src="{{ asset('assets/front/svg/1/biscuit.svg')}}" alt="">
                                        <h6>Biscuits & Snacks</h6>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>

                                    <div class="onhover-category-box">
                                        <div class="list-1">
                                            <div class="category-title-box">
                                                <h5>Biscuits & Cookies</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Salted Biscuits</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Marie, Health, Digestive</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Cream Biscuits & Wafers</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Glucose & Milk Biscuits</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Cookies</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="list-2">
                                            <div class="category-title-box">
                                                <h5>Bakery Snacks</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Bread Sticks & Lavash</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Cheese & Garlic Bread</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Puffs, Patties, Sandwiches</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Breadcrumbs & Croutons</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="onhover-category-list">
                                    <a href="javascript:void(0)" class="category-name">
                                        <img src="{{ asset('assets/front/svg/1/grocery.svg')}}" alt="">
                                        <h6>Grocery & Staples</h6>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>

                                    <div class="onhover-category-box">
                                        <div class="list-1">
                                            <div class="category-title-box">
                                                <h5>Grocery</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Lemon, Ginger & Garlic</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Indian & Exotic Herbs</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Vegetables</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Fruits</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="list-2">
                                            <div class="category-title-box">
                                                <h5>Organic Staples</h5>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Dry Fruits</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Dals & Pulses</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Millet & Flours</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Sugar, Jaggery</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Masalas & Spices</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Rice, Other Rice</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Flours</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Organic Edible Oil, Ghee</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="header-nav-middle">
                        <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                            <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                <div class="offcanvas-header navbar-shadow">
                                    <h5>Menu</h5>
                                    <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/') }}"
                                               >Home</a>

                                            <!--ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ url('/index-1') }}">Home One</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ url('/index-2') }}">Home Two</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ url('/index-3') }}">Home Three</a>
                                                </li>

                                            </ul-->
                                        </li>

                                        <li class="nav-item ">
                                            <a class="nav-link " href="https://dev.ghwo.org/"
                                              >Shop</a>

                                            <!--ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ url('/listing') }}">Product Page</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ url('/category') }}">Shop
                                                        Category</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ url('/detail') }}">Detail Page</a>
                                                </li>
                                            </ul-->
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="about-us">
                                              About Us</a> </li>
                                              <li class="nav-item ">

                                            <a class="nav-link " href="contact-us">
                                            Contact Us</a> </li>

                                              <li class="nav-item ">
                                            <a class="nav-link " href="store/apply">
                                              Become A seller</a> </li>

                                        <!--li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                               data-bs-toggle="dropdown">Product</a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="product-4-image.html">Product
                                                        4 Image</a>
                                                </li>
                                                <li class="sub-dropdown-hover">
                                                    <a href="javascript:void(0)" class="dropdown-item">Product
                                                        Thumbnail</a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="product-left-thumbnail.html">Left Thumbnail</a>
                                                        </li>

                                                        <li>
                                                            <a href="product-right-thumbnail.html">Right
                                                                Thumbnail</a>
                                                        </li>

                                                        <li>
                                                            <a href="product-bottom-thumbnail.html">Bottom
                                                                Thumbnail</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="product-bundle.html" class="dropdown-item">Product
                                                        Bundle</a>
                                                </li>
                                                <li>
                                                    <a href="product-slider.html" class="dropdown-item">Product
                                                        Slider</a>
                                                </li>
                                                <li>
                                                    <a href="product-sticky.html" class="dropdown-item">Product
                                                        Sticky</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown dropdown-mega">
                                            <a class="nav-link dropdown-toggle ps-xl-2 ps-0"
                                               href="javascript:void(0)" data-bs-toggle="dropdown">Mega Menu</a>

                                            <div class="dropdown-menu dropdown-menu-2">
                                                <div class="row">
                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Daily Vegetables</h5>
                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Beans
                                                            & Brinjals</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">Broccoli & Cauliflower</a>

                                                        <a href="shop-left-sidebar.html"
                                                           class="dropdown-item">Chilies, Garlic</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">Vegetables & Salads</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">Gourd, Cucumber</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Herbs
                                                            & Sprouts</a>

                                                        <a href="demo-personal-portfolio.html"
                                                           class="dropdown-item">Lettuce & Leafy</a>
                                                    </div>

                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Baby Tender</h5>
                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Beans
                                                            & Brinjals</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">Broccoli & Cauliflower</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">Chilies, Garlic</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">Vegetables & Salads</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">Gourd, Cucumber</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">Potatoes & Tomatoes</a>

                                                        <a href="shop-left-sidebar.html" class="dropdown-item">Peas
                                                            & Corn</a>
                                                    </div>

                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Exotic Vegetables</h5>
                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">Asparagus & Artichokes</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">Avocados & Peppers</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">Broccoli & Zucchini</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">Celery, Fennel & Leeks</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">Chilies & Lime</a>
                                                    </div>

                                                    <div class="dropdown-column dropdown-column-img col-3"></div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                               data-bs-toggle="dropdown">Blog</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="blog-detail.html">Blog Detail</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="blog-list.html">Blog List</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                               data-bs-toggle="dropdown">Seller</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ url('become-seller') }}">Become a
                                                        Seller</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ url('/seller-list') }}">Seller List</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ url('/seller') }}">Seller</a>
                                                </li>
                                            </ul>
                                        </li-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="header-nav-right">
                        <button class="btn deal-button" data-bs-toggle="modal" data-bs-target="#deal-box">
                            <i data-feather="zap"></i>
                            <span>Deal Today</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
