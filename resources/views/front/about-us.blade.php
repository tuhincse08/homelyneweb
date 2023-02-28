@extends('front.layouts.layout')

@section('content')
    <!-- Breadcrumb Section Start -->
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>About Us</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Fresh Vegetable Section Start -->
    <section class="fresh-vegetable-section section-lg-space">
        <div class="container-fluid-lg">
            <div class="row gx-xl-5 gy-xl-0 g-3 ratio_148_1">
                <div class="col-xl-6 col-12">
                    <div class="row g-sm-4 g-2">
                        <div class="col-6">
                            <div class="fresh-image-2">
                                <div>
                                    <img src="{{ asset('assets/front/images/inner-page/about-us/1.jpg')}}"
                                        class="bg-img blur-up lazyload" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="fresh-image">
                                <div>
                                    <img src="{{ asset('assets/front/images/inner-page/about-us/2.jpg')}}"
                                        class="bg-img blur-up lazyload" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-12">
                    <div class="fresh-contain p-center-left">
                        <div>
                            <div class="review-title">
                                <h4>About Us</h4>
                                <h2> Fresh and locally sourced </h2>
                            </div>

                            <div class="delivery-list">
                                <p class="text-content">HomeLyne is a convenient digital marketplace for locally grown vegetables,
                                    home cooked food, handmade products, and general merchandise. Our goal is to bring the products
                                    made by local homepreneurs and smallholders directly to your doorstep, supporting and empowering
                                    the local community while providing you with the freshest and most authentic products available.
                                </p>
                                <p class="text-content">Our focus is on providing the best experience for all parties involved.
                                    We are committed to providing customers with a hassle-free and a tailored shopping experience
                                    that allows them to discover new and exciting products not found in big box stores and support
                                    local businesses. Our sellers can easily set up shop and reach a wider audience, while our
                                    delivery riders can earn extra income by delivering these products to customers.
                                </p>
                                <p class="text-content">We are passionate about championing local businesses and empowering communities
                                    with just a few clicks. Sumali na ngayon upang matuklasan ang benepisyo ng pagbili at pagbenta sa aming marketplace!
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fresh Vegetable Section End -->

      @endsection
