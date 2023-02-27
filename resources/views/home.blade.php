@extends('layouts.landing.app')
@section('title', 'HomeLyne | Online Grocery and Marketplace | Homegrown and Homemade Products in Philippines')
@section('content')
    <!-- Basic Settings -->
    @php($front_end_url = \App\Models\BusinessSetting::where(['key' => 'front_end_url'])->first())
    @php($front_end_url = $front_end_url ? $front_end_url->value : null)
    @php($landing_page_text = \App\Models\BusinessSetting::where(['key' => 'landing_page_text'])->first())
    @php($landing_page_text = isset($landing_page_text->value) ? json_decode($landing_page_text->value, true) : null)
    @php($landing_page_links = \App\Models\BusinessSetting::where(['key' => 'landing_page_links'])->first())
    @php($landing_page_links = isset($landing_page_links->value) ? json_decode($landing_page_links->value, true) : null)
    @php($landing_page_images = \App\Models\BusinessSetting::where(['key' => 'landing_page_images'])->first())
    @php($landing_page_images = isset($landing_page_images->value) ? json_decode($landing_page_images->value, true) : null)
    <!-- Hero Section -->
    <section>
        <div class="container">
            <div class="row hero-content-main">
                <div class="col-lg-6 col-md-6 col-sm-12 hero-content responsive-ps ps-5 ">
                    <h3 class="animate__animated animate__backInRight hero-title-top">
                        {{ isset($landing_page_text) ? $landing_page_text['header_title_3'] : '' }}
                    </h3>
                    <h1 class="animate__animated animate__backInLeft hero-title-main">
                        {{ isset($landing_page_text) ? $landing_page_text['header_title_1'] : '' }}
                    </h1>
                    <h4 class="animate__animated animate__bounceIn animate__delay-1s hero-title-three">
                        {{ isset($landing_page_text) ? $landing_page_text['header_title_2'] : '' }}
                    </h4>
                    <div class="app-logo animate__animated animate__fadeInDown">
                        @if ($landing_page_links['app_url_android_status'])
                            <a href="{{ $landing_page_links['app_url_android'] }}">
                                <img class="img-fluid" style="width:150px; height:50px;" src="{{ asset('public/assets/landing') }}/image/playstore.png"
                                    alt="Play store" />
                            </a>
                        @endif
                        @if ($landing_page_links['app_url_ios_status'])
                            <a href="{{ $landing_page_links['app_url_ios'] }}">
                                <img class="img-fluid" style="width:150px; height:50px;"
                                    src="{{ asset('public/assets/landing') }}/image/apple_store.png" alt="iOS App">
                            </a>
                        @endif
                        <a href="https://appgallery.huawei.com/" target="_blank">
                                        <img class="img-fluid" style="width:150px; height:50px;"
                                            src="{{ asset('public/assets/landing') }}/image/hag1.png"
                                            alt="huawei App" />
                                    </a>

                        @if ($landing_page_links['web_app_url_status'])
                            <a href="{{ $landing_page_links['web_app_url'] }}">
                                <img class="img-fluid" style="width:150px; height:50px;" src="{{ asset('public/assets/landing') }}/image/browse.png">
                            </a>
                        @endif

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="{{asset('public/assets/landing')}}/image/{{isset($landing_page_images['top_content_image'])?$landing_page_images['top_content_image']:'double_screen_image.png'}}"
                        onerror="this.src='{{asset('public/assets/landing/image/double_screen_image.png')}}'}}'"
                        alt="Image One"
                        class="img-fluid hero-content-image animate__animated animate__bounceInRight" />
                </div>
            </div>
        </div>
    </section>
    <!-- About us section -->

    <section class="about-section">
        <div class="container">
            <div class="row about-section-row">
                <div class="col-lg-6 col-md-6 col-sm-12 about-us-left justify-content-center">
                      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">


                          <div class="carousel-item active">
                            <img src="{{ asset('public/assets/landing') }}/image/about02.jpg" class="d-block w-100" alt="about 02" style="width:100%;">
                          </div>

                          <div class="carousel-item">
                            <img src="{{ asset('public/assets/landing') }}/image/about03.jpg" class="d-block w-100" alt="about 03" style="width:100%;">
                          </div>

                          <div class="carousel-item">
                            <img src="{{ asset('public/assets/landing') }}/image/about01.jpg" class="d-block w-100" alt="about 01" style="width:100%;">
                          </div>
                        </div>

                        <!-- Left and right controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                      </div>
                   <!--img class="img-fluid animate__animated animate__fadeInDown about-us-image w-100"
                        src="{{ asset('public/assets/landing') }}/image/{{ isset($landing_page_images['about_us_image']) ? $landing_page_images['about_us_image'] : 'about_us_image.png' }}"
                        alt="Image" /-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 about-us-right-column">
                    <div class="about-us__right animate__animated animate__backInRight">
                        <h3>{{ translate('messages.about_us') }}</h3>
                        <h2>{{ isset($landing_page_text) ? $landing_page_text['about_title'] : '' }}</h2>
                        <p class="about-us-text">
                            {!! \Illuminate\Support\Str::limit(\App\CentralLogics\Helpers::get_settings('about_us'), 520) !!}
                        </p>
                        <a href="{{ route('about-us') }}"
                            class="btn btn-lg read-more mt-4">{{ translate('messages.read_more') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Features -->
    @php($feature = \App\Models\BusinessSetting::where(['key' => 'feature'])->first())
    @php($feature = isset($feature->value) ? json_decode($feature->value, true) : null)
    @if ($feature && count($feature) > 0)
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-5 stuning-feature">
                        <div class="service-left animate__animated animate__backInLeft">
                            <h2 class="section-heading">{{ isset($landing_page_text['feature_section_title']) ? $landing_page_text['feature_section_title'] :translate('messages.our_features') }}</h2>
                            <p class="stuning-p">
                                {{ isset($landing_page_text['feature_section_description']) ? $landing_page_text['feature_section_description'] : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ex odio,  turpis accumsan congue.' }}
                            </p>
                        </div>
                        @foreach ($feature as $feature_data)
                            <div class="d-flex align-items-center feature">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid feature-image animate__animated animate__fadeInDown"
                                        src="{{ asset('public/assets/landing/') }}/image/{{ $feature_data['img'] }}"
                                        alt="Image" />
                                </div>
                                <div class="flex-grow-1 ms-3 feature-service">
                                    <h4>{{ $feature_data['title'] }}</h4>
                                    <p>
                                        {{ $feature_data['feature_description'] }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 about-us-left">
                        <img class="img-fluid stuning-image w-100"
                            src="{{ asset('public/assets/landing') }}/image/{{ isset($landing_page_images['feature_section_image']) ? $landing_page_images['feature_section_image'] : 'about_us_image.png' }}" alt="About us" />
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- Apps -->
    @if ($landing_page_links['app_url_android_status'] !== null || $landing_page_links['app_url_ios_status'] !== null)
        <section class="pt-lg-5 pb-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 about-us-left">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="true">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="3" aria-label="Slide 4"></button>
                          </div>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{ asset('public/assets/landing') }}/image/phone1.jpeg" class="d-block w-100" alt="App 01" style="width:100%;">
                          </div>

                          <div class="carousel-item">
                            <img src="{{ asset('public/assets/landing') }}/image/phone2.jpeg" class="d-block w-100" alt="App 02" style="width:100%;">
                          </div>

                          <div class="carousel-item">
                            <img src="{{ asset('public/assets/landing') }}/image/phone3.png" class="d-block w-100" alt="App 03" style="width:100%;">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('public/assets/landing') }}/image/phone4.jpeg" class="d-block w-100" alt="App 03" style="width:100%;">
                          </div>
                        </div>

                        <!-- Left and right controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                      </div>

                        <!--img class="img-fluid our-app-image w-100"
                            src="{{ asset('public/assets/landing') }}/image/{{ isset($landing_page_images['mobile_app_section_image']) ? $landing_page_images['mobile_app_section_image'] : 'our_app_image.png' }}" alt="Image" /-->
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 our-app-text-box">
                        <div class="about-us-right align-center">
                            <h3>{{ translate('messages.our_mobile_applications') }}</h3>

                            <p class="about-text">
                                {{ isset($landing_page_text['mobile_app_section_text']) ? $landing_page_text['mobile_app_section_text'] : 'Mobile App Section Paragraph' }}
                            </p>
                            <h4>Buyer App</h4>
                            <p style="padding-top:0; margin-bottom:0;line-height:150%;">Support small businesses and the community by shopping on HomeLyne.shop</p>
                            <h5>Download Our <a style="color:#039d55;" href="https://dev.ghwo.org/apps/buyer.apk">Buyer APP</a></h5>

                            <h4 style="margin-top:20px">Seller App</h4>
                            <p style="padding-top:0; margin-bottom:0;line-height:150%;">Open an e-commerce shop and do business from the convenience of your home without investment.</p>
                            <h5>Download Our <a style="color:#039d55;" href="https://dev.ghwo.org/apps/seller.apk">Seller APP</a></h5>

                            <h4 style="margin-top:20px">Delivery Rider App</h4>
                            <p style="padding-top:0; margin-bottom:0;line-height:150%;">Become a delivery rider and enjoy benefits such as flexible work hours, time off, and insurance coverage.</p>
                            <h5>Download Our <a style="color:#039d55;" href="https://dev.ghwo.org/apps/delivery.apk">Delivery Rider APP</a></h5>
                            <br/><br/>
                            <div class="app-section-logo animate__animated animate__fadeInDown">
                                @if ($landing_page_links['app_url_android_status'])
                                    <a href="{{ $landing_page_links['app_url_android'] }}" target="_blank">
                                        <img class="img-fluid w-100" style="width:150px; height:50px;"
                                            src="{{ asset('public/assets/landing') }}/image/playstore.png"
                                            alt="Play store" />
                                    </a>&nbsp;
                                @endif
                                @if ($landing_page_links['app_url_ios_status'])
                                    <a href="{{ $landing_page_links['app_url_ios'] }}" target="_blank">
                                        <img class="img-fluid apple-store w-100" style="width:150px; height:50px;"
                                            src="{{ asset('public/assets/landing') }}/image/apple_store.png"
                                            alt="iOS App" />
                                    </a>&nbsp;
                                @endif
                                <a href="https://appgallery.huawei.com/" target="_blank">
                                        <img class="img-fluid apple-store w-100" style="width:150px; height:50px;"
                                            src="{{ asset('public/assets/landing') }}/image/hag1.png"
                                            alt="huawei App" />
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- Why Choose Us -->
    @php($speciality = \App\Models\BusinessSetting::where(['key' => 'speciality'])->first())
    @php($speciality = isset($speciality->value) ? json_decode($speciality->value, true) : null)
    @if (isset($speciality) && count($speciality) > 0)
        <section class="pt-lg-5 pb-lg-5">
            <div class="container why-choose-us">
                <div class="row  d-flex justify-content-center responsive-css">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <center>
                        <h2 style="color:#CB0000; text-allign:center;" class="section-heading">
                            {{ isset($landing_page_text) ? $landing_page_text['why_choose_us'] : '' }}</h2></center>
                        <!--p class="why-choose-text">
                            {{ isset($landing_page_text) ? $landing_page_text['why_choose_us_title'] : '' }}</p-->
                            <p class="why-choose-text">At HomeLyne.shop, we believe that shopping should be both pleasing and purposeful.
                                That's why we offer a world of exceptional, fresh, and locally sourced products,
                                where every purchase supports homepreneurs and smallholders in their pursuit of success,
                                empowerment, and fulfilment.</p>
                            <p class="why-choose-text">
                                Our commitment to bringing you the best in fresh and unique products goes hand-in-hand with our
                                dedication to social and environmental responsibility. When you shop with us, you can feel good
                                knowing that you're making a positive impact on both the environment and society.
                            </p>
                            <p class="why-choose-text">
                                We understand that our customers lead busy lives, and that's why we make it our mission to provide an
                                easy and convenient shopping experience. With HomeLyne.shop, you'll discover a wealth of local and
                                homegrown products at your fingertips, all while supporting small businesses and families.
                                </p>
                            <p class="why-choose-text">
                                So why choose us? Because at HomeLyne.shop, we bring you the best in locally sourced products while
                                helping you to make a difference in the world. With us, your lifestyle aspirations and social and
                                environmental responsibilities are one and the same. Join us today, and discover the satisfaction of shopping with purpose.
                            </p>
                        <div style="background-color:#F7611E;" class="main-heading-underline mx-auto"></div>
                    </div>
                    @foreach ($speciality as $sp)
                        <div class="col-md-4 col-sm-12 custom-card ">
                            <div class="card card-square shadow" style="background-color: #e0fff0;">
                                <img class="img-fluid mt-3"
                                    src="{{ asset('public/assets/landing') }}/image/{{ $sp['img'] }}" alt="Image" />
                                <div class="card-body my-card-body">
                                    <h4 class="box-card-heading" style="color:#146539;">{{ $sp['title'] }}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <section class="subscription">
        <div class="container">
            <div class="subscription">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <h2 style="color:#CB0000;" class="news-letter-heading">{{ translate('messages.news_letter_signup') }}</h2>
                        <p class="news-letter-text">

                            {{ translate('messages.news_letter_signup_text') }}
                        </p>
                        <div style="background-color:#F7611E;" class="news-heading-underline mx-auto"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <form id="newsLetterForm" method="post" action="{{ route('newsletter.subscribe') }}">
                                @csrf
                                <input type="email" name="email" class="form-control newsletter--input"
                                    placeholder="Enter Valid Email" value="{{ old('email') }}" required> <br>
                                <button type="submit" style="background-color:#F7611E; border-color:#F7611E;" class="btn btn-info subscribe-btn"><i
                                        class="fa-solid fa-chevron-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Final testimonial --}}
    @php($testimonial = \App\Models\BusinessSetting::where(['key' => 'testimonial'])->first())
    @php($testimonial = isset($testimonial->value) ? json_decode($testimonial->value, true) : null)
    @if ($testimonial && count($testimonial) > 0)
        <section class="customer-testimonial">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <h2 class="section-heading client-review-mt">
                            {{ isset($landing_page_text) ? $landing_page_text['testimonial_title'] : '' }}
                        </h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-center text-center">
                    <div class="owl-carousel mt-4">
                        @foreach ($testimonial as $data)
                            <div class="col owl-item">
                                <div class="testimonial">
                                    <div class="pic">
                                        <img class="img-fluid" src="{{ asset('public/assets/landing') }}/image/{{ $data['img'] }}"
                                            alt="Image">
                                    </div>
                                    <div class="testimonial-content">
                                        <h3 class="testimonial-title">
                                            {{ $data['name'] }}
                                            <small class="post">{{ $data['position'] }}</small>
                                        </h3>
                                        <p class="description">
                                            {{ $data['detail'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
@push('script_2')
@endpush
