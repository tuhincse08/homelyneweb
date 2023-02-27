@extends('layouts.landing.app')

@section('title', 'Contact Us')

@section('content')
    <main>
        <div class="main-body-div">
            <!-- Top Start -->
            <section class="top-start min-height-100px">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mt-2 text-center">
                            {{-- <h1>{{translate('messages.contact_us')}}</h1> --}}
                        </div>
                        <div class="col-12">
                            <center>
                                <div style="width: 960px;">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7738.590625370882!2d120.96331083990478!3d14.11872265427965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd777b1ab54c8f%3A0x6ecc514451ce2be8!2sTagaytay%2C%20Cavite%2C%20Philippines!5e0!3m2!1sen!2sbd!4v1675484469475!5m2!1sen!2sbd" width="960" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <!--img class="img-fluid w-20" src="{{ asset('public/assets/landing/image/contact.png') }}"-->
                                <h6 class="mt-4">
                                    Phone : {{ \App\CentralLogics\Helpers::get_settings('phone') }},
                                    Email : {{ \App\CentralLogics\Helpers::get_settings('email_address') }}
                                </h6><br>
                                <h6>
                                    Address : {{ \App\CentralLogics\Helpers::get_settings('address') }}
                                </h6>
                            </center>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Top End -->
        </div>
    </main>
@endsection
