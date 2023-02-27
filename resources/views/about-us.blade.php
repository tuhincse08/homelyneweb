@extends('layouts.landing.app')

@section('title','About Us')

@section('content')


    <main>
        <div class="main-body-div">
            <!-- Top Start -->
            <section class="top-start min-height-100px">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mt-2 text-center">
                            <h1>{{translate('messages.about_us')}}</h1>
                        </div>

                        <div class="col-12">
                            {!! $data !!}
                        </div>
                        <!--center>
                            <img class="img-fluid animate__animated animate__fadeInDown about-us-image" style="width:700px;"
                            src="{{ asset('public/assets/landing') }}/image/team.jpg"
                            alt="Image" /><br/><br/>
                            <h5>Our Managemnt & Service Team</h5>
                        </center-->
                    </div>
                </div>
            </section>
            <!-- Top End -->
        </div>
    </main>
@endsection
