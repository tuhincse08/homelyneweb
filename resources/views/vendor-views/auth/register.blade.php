@extends('layouts.landing.app')
@section('title', translate('messages.store_registration'))
@push('css_or_js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css"/>
@endpush
@push('css_or_js')
    <link rel="stylesheet" href="{{ asset('public/assets/admin') }}/css/toastr.css">
    <style>
        #map {
            height: 350px;
        }

        @media only screen and (max-width: 768px) {

            /* For mobile phones: */
            #map {
                height: 200px;
            }
        }

        .form-container {
            box-shadow: 4px 4px 10px rgba(65, 83, 179, 0.15);
            border-radius: 8px;
            border: 2px solid #b3bac3;
            padding: 0.625rem;
        }

        .row-margin-top {
            margin-top: 20px;
        }

        /* .btn-primary:hover {
            background-color: #EF7833;
            border-color: #EF7833;
        }

        .btn-primary {
            background-color: #EF7822;
            border-color: #EF7822;
        } */

        .cover-photo {
            margin-left: 150px;
        }

        .restaurant-logo {
            margin-left: 100px;
            margin-right: 150px;
        }

    </style>
@endpush
@section('content')
    <section class="m-0">
        <div class="container">
            <!-- Page Header -->
            <div class="page-header" style="border-bottom:0;padding-bottom:0;">
                <div class="row align-items-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <h1 class="page-header-title text-center"><i class="tio-add-circle-outlined"></i>
                            {{ translate('messages.store_application') }}</h1>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
                <div class="card shadow-sm col-12">
                    <form class="card-body" action="{{ route('restaurant.store') }}" method="post" enctype="multipart/form-data"
                        class="js-validate">
                        @csrf
                        <small class="nav-subtitle">{{ translate('messages.store') }}
                            {{ translate('messages.info') }}</small>
                        <br>
                        <div class="row row-margin-top">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label class="input-label" for="name">{{ translate('messages.store') }}
                                        {{ translate('messages.name') }}</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="{{ translate('messages.store') }} {{ translate('messages.name') }}"
                                        value="{{ old('name') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label class="input-label" for="tax">{{ translate('messages.vat/tax') }} (%)</label>
                                    <input type="number" name="tax" class="form-control"
                                        placeholder="{{ translate('messages.vat/tax') }}" min="0" step=".01" required
                                        value="{{ old('tax') }}">
                                </div>
                            </div>

                        </div>
                        <div class="row row-margin-top">
                            
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label class="input-label" for="about">About Store</label>
                                    <textarea type="text" name="about" class="form-control"
                                        placeholder="About the store"
                                        >{{ old('about') }}</textarea>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label class="input-label" for="address">{{ translate('messages.store') }}
                                        {{ translate('messages.address') }}</label>
                                    <textarea type="text" name="address" class="form-control"
                                        placeholder="{{ translate('messages.store') }} {{ translate('messages.address') }}"
                                        required>{{ old('address') }}</textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label class="input-label" for="returnaddress">Return Address</label>
                                    <textarea type="text" name="returnaddress" class="form-control"
                                        placeholder="Retrun Address to receive return Orders"
                                        required>{{ old('returnaddress') }}</textarea>
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label class="input-label" for="maximum_delivery_time">{{translate('messages.approx_delivery_time')}}</label>
                                    <div class="input-group">
                                        <input type="number" name="minimum_delivery_time" class="form-control" placeholder="Min: 10" value="{{old('minimum_delivery_time')}}">
                                        <input type="number" name="maximum_delivery_time" class="form-control" placeholder="Max: 20" value="{{old('maximum_delivery_time')}}">
                                        <select name="delivery_time_type" class="form-control text-capitalize" id="" required>
                                            <option value="min">{{translate('messages.minutes')}}</option>
                                            <option value="hours">{{translate('messages.hours')}}</option>
                                            <option value="days">{{translate('messages.days')}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-margin-top">
                            <div class="col-md-6 col-lg-6 col-sm-12 float-end">
                                <div class="form-group">
                                    <center>
                                        <img style="max-width: 100%;border: 1px solid; border-radius: 10px; height:150px;"
                                            id="coverImageViewer"
                                            src="{{ asset('public/assets/admin/img/900x400/img1.jpg') }}"
                                            alt="Product thumbnail" />
                                    </center>
                                    <label for="name" class="pt-2">{{ translate('messages.upload') }} {{ translate('messages.cover') }}
                                        {{ translate('messages.photo') }} <span
                                            class="text-danger">({{ translate('messages.ratio') }}
                                            2:1)</span></label>
                                    <div class="custom-file">
                                        <input type="file" name="cover_photo" id="coverImageUpload" class="form-control"
                                            accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <center>
                                        <img style="max-width: 100%;border: 1px solid; border-radius: 10px; height:150px;"
                                            id="logoImageViewer"
                                            src="{{ asset('public/assets/admin/img/160x160/img1.jpg') }}"
                                            alt="Product thumbnail" />
                                    </center>

                                    <label class="input-label pt-2">{{ translate('messages.store') }}
                                        {{ translate('messages.logo') }}<small style="color: red"> (
                                            {{ translate('messages.ratio') }}
                                            1:1
                                            )</small></label>
                                    <div class="custom-file">
                                        <input type="file" name="logo" id="customFileEg1" class="form-control"
                                            accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-margin-top">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="input-label" for="choice_zones">{{ translate('messages.zone') }} <span
                                            class="input-label-secondary" title="{{ translate('messages.select_zone_for_map') }}"><img
                                                src="{{ asset('/public/assets/admin/img/info-circle.svg') }}"
                                                alt="{{ translate('messages.select_zone_for_map') }}"></span></label>
                                    <select name="zone_id" id="choice_zones" required class="form-control js-select2-custom"
                                        data-placeholder="{{ translate('messages.select') }} {{ translate('messages.zone') }}">
                                        <option value="" selected disabled>{{ translate('messages.select') }}
                                            {{ translate('messages.zone') }}</option>
                                        @foreach (\App\Models\Zone::active()->get() as $zone)
                                            @if (isset(auth('admin')->user()->zone_id))
                                                @if (auth('admin')->user()->zone_id == $zone->id)
                                                    <option value="{{ $zone->id }}" selected>{{ $zone->name }}</option>
                                                @endif
                                            @else
                                                <option value="{{ $zone->id }}">{{ $zone->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <!--div class="col-md-6">
                                <div class="form-group">
                                    <label class="input-label">{{translate('messages.module')}}</label>
                                    <select name="module_id" required
                                            class="form-control js-select2-custom"  data-placeholder="{{translate('messages.select')}} {{translate('messages.module')}}">
                                            <option value="" selected disabled>{{translate('messages.select')}} {{translate('messages.module')}}</option>
                                        @foreach(\App\Models\Module::notParcel()->get() as $module)
                                            <option value="{{$module->id}}">{{$module->module_name}}</option>
                                        @endforeach
                                    </select>
                                    <small class="text-danger">{{translate('messages.module_change_warning')}}</small>
                                </div>
                            </div-->
                            <input type="hidden" id="module_id" name="module_id" value="1">
                            <br/>
                            
                            <div class="col-md-12 col-lg-12 col-sm-12 mb-2" style="margin-top:20px;">
                                <input id="pac-input" class="controls rounded" style="height: 3em;width:fit-content;" title="{{translate('messages.search_your_location_here')}}" type="text" placeholder="{{translate('messages.search_here')}}"/>
                                <div id="map"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="input-label" for="latitude">{{ translate('messages.latitude') }} <span
                                            class="input-label-secondary"
                                            title="{{ translate('messages.store_lat_lng_warning') }}"><img
                                                src="{{ asset('/public/assets/admin/img/info-circle.svg') }}"
                                                alt="{{ translate('messages.store_lat_lng_warning') }}"></span></label>
                                    <input type="text" id="latitude" name="latitude" class="form-control"
                                        placeholder="{{ translate('messages.Ex:') }} -94.22213" value="{{ old('latitude') }}" required readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="input-label" for="longitude">{{ translate('messages.longitude') }} <span
                                            class="input-label-secondary"
                                            title="{{ translate('messages.store_lat_lng_warning') }}"><img
                                                src="{{ asset('/public/assets/admin/img/info-circle.svg') }}"
                                                alt="{{ translate('messages.store_lat_lng_warning') }}"></span></label>
                                    <input type="text" name="longitude" class="form-control" placeholder="{{ translate('messages.Ex:') }} 103.344322"
                                        id="longitude" value="{{ old('longitude') }}" required readonly>
                                </div>
                            </div>
                        </div>

                        <br>
                        <small class="nav-subtitle">{{ translate('messages.owner') }}
                            {{ translate('messages.info') }}</small>
                        <div class="row row-margin-top">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <label class="input-label" for="f_name">{{ translate('messages.first') }} & Middle
                                        {{ translate('messages.name') }}</label>
                                    <input type="text" name="f_name" class="form-control"
                                        placeholder="{{ translate('messages.first') }} & Middle {{ translate('messages.name') }}"
                                        value="{{ old('f_name') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <label class="input-label" for="l_name">{{ translate('messages.last') }}
                                        {{ translate('messages.name') }}</label>
                                    <input type="text" name="l_name" class="form-control"
                                        placeholder="{{ translate('messages.last') }} {{ translate('messages.name') }}"
                                        value="{{ old('l_name') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label class="input-label" for="phone">{{ translate('messages.phone') }}</label>
                                <div class="form-group">
                                    
                                    <input type="tel" name="phone" id="phone" placeholder="{{ translate('messages.Ex:') }} 017********"
                                            class="form-control" value="{{ old('phone') }}" required>
                                </div>


                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label class="input-label"
                                        for="exampleFormControlInput1">{{ translate('messages.identity') }}
                                        {{ translate('messages.type') }}</label>
                                    <select name="identity_type" class="form-control">
                                        <option value="passport">{{ translate('messages.passport') }}</option>
                                        <option value="driving_license">{{ translate('messages.driving') }}
                                            {{ translate('messages.license') }}</option>
                                        <option value="others">Others</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label class="input-label"
                                        for="exampleFormControlInput1">{{ translate('messages.identity') }}
                                        {{ translate('messages.number') }}</label>
                                    <input type="text" name="identity_number" class="form-control"
                                        value="{{ old('identity_number') }}" placeholder="{{ translate('messages.Ex:') }} DH-23434-LS" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label class="input-label"
                                        for="exampleFormControlInput1">{{ translate('messages.identity') }}
                                        {{ translate('messages.image') }}</label>
                                    <div>
                                        <div class="row" id="coba"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <small class="nav-subtitle">{{ translate('messages.login') }}
                            {{ translate('messages.info') }}</small>
                        <div class="row mt-3">
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                <div class="form-group">
                                    <label class="input-label" for="email">{{ translate('messages.email') }}</label>
                                    <input type="email" name="email" class="form-control" placeholder="{{ translate('messages.Ex:') }} ex@example.com"
                                        value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                <div class="form-group">
                                    <label class="input-label"
                                        for="exampleInputPassword">{{ translate('messages.password') }}</label>
                                    <input type="password" name="password"
                                        placeholder="{{ translate('messages.password_length_placeholder', ['length' => '6+']) }}"
                                        class="form-control form-control-user" minlength="6" id="exampleInputPassword" required
                                        value="{{ old('password') }}">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                <div class="form-group">
                                    <label class="input-label"
                                        for="signupSrConfirmPassword">{{ translate('messages.confirm_password') }}</label>
                                    <input type="password" name="confirm-password" class="form-control form-control-user"
                                        minlength="6" id="exampleRepeatPassword"
                                        placeholder="{{ translate('messages.password_length_placeholder', ['length' => '6+']) }}"
                                        required value="{{ old('confirm-password') }}">
                                    <div class="pass invalid-feedback">{{ translate('messages.password_not_matched') }}</div>
                                </div>

                            </div>
                        </div>
                        <br/>
                        <input type="checkbox" id="checkbox"> I agree with all <em><a href="{{ route('privacy-policy') }}">Privacy Policy</a><em> of HomeLyne.<br/>
                        <br/>
                        <button type="submit" id="agreeToSubmit"
                            class="btn btn-primary float-right">{{ translate('messages.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @endsection
    @push('script_2')
        <script src="{{ asset('public/assets/admin') }}/js/toastr.js"></script>
        {!! Toastr::message() !!}

        @if ($errors->any())
            <script>
                @foreach ($errors->all() as $error)
                    toastr.error('{{ $error }}', Error, {
                    CloseButton: true,
                    ProgressBar: true
                    });
                @endforeach
            </script>
        @endif
        
        <script>
            $('#agreeToSubmit').prop('disabled', true);
            $('#checkbox').click(function() {
               // change on checkbox click
               $('#agreeToSubmit').prop('disabled', !$('#checkbox').prop('checked'));
            });
        </script>
        
         <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"
        integrity="sha512-QMUqEPmhXq1f3DnAVdXvu40C8nbTgxvBGvNruP6RFacy3zWKbNTmx7rdQVVM2gkd2auCWhlPYtcW2tHwzso4SA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"
        integrity="sha512-hkmipUFWbNGcKnR0nayU95TV/6YhJ7J9YUAkx4WLoIgrVr7w1NYz28YkdNFMtPyPeX1FrQzbfs3gl+y94uZpSw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
    <link rel="shortcut icon" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/img/flags.png"
        type="image/x-icon">
    <link rel="shortcut icon" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/img/flags@2x.png"
        type="image/x-icon">
        
        
        <script>
            $('#exampleInputPassword ,#exampleRepeatPassword').on('keyup', function() {
                var pass = $("#exampleInputPassword").val();
                var passRepeat = $("#exampleRepeatPassword").val();
                if (pass == passRepeat) {
                    $('.pass').hide();
                } else {
                    $('.pass').show();
                }
            });


            function readURL(input, viewer) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#' + viewer).attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#customFileEg1").change(function() {
                readURL(this, 'logoImageViewer');
            });

            $("#coverImageUpload").change(function() {
                readURL(this, 'coverImageViewer');
            });
            
            @php($country = \App\Models\BusinessSetting::where('key', 'country')->first())
            var phone = $("#phone").intlTelInput({
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js",
                autoHideDialCode: true,
                autoPlaceholder: "ON",
                dropdownContainer: document.body,
                formatOnDisplay: true,
                hiddenInput: "phone",
                initialCountry: "{{ $country ? $country->value : auto }}",
                placeholderNumberType: "MOBILE",
                separateDialCode: true
            });
        
        
        </script>

        <script src="{{ asset('public/assets/admin/js/spartan-multi-image-picker.js') }}"></script>
        <script type="text/javascript">
            $(function() {
                $("#coba").spartanMultiImagePicker({
                    fieldName: 'identity_image[]',
                    maxCount: 5,
                    rowHeight: '120px',
                    groupClassName: 'col-lg-2 col-md-4 col-sm-4 col-6',
                    maxFileSize: '',
                    placeholderImage: {
                        image: '{{ asset('public/assets/admin/img/400x400/img2.jpg') }}',
                        width: '100%'
                    },
                    dropFileLabel: "Drop Here",
                    onAddRow: function(index, file) {

                    },
                    onRenderedPreview: function(index) {

                    },
                    onRemoveRow: function(index) {

                    },
                    onExtensionErr: function(index, file) {
                        toastr.error('{{ translate('messages.please_only_input_png_or_jpg_type_file') }}', {
                            CloseButton: true,
                            ProgressBar: true
                        });
                    },
                    onSizeErr: function(index, file) {
                        toastr.error('{{ translate('messages.file_size_too_big') }}', {
                            CloseButton: true,
                            ProgressBar: true
                        });
                    }
                });
            });
        </script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <script
                src="https://maps.googleapis.com/maps/api/js?key={{ \App\Models\BusinessSetting::where('key', 'map_api_key')->first()->value }}&libraries=drawing,places&v=3.45.8">
        </script>
        
       
        
        <script>
            @php($default_location = \App\Models\BusinessSetting::where('key', 'default_location')->first())
            @php($default_location = $default_location->value ? json_decode($default_location->value, true) : 0)
            let myLatlng = {
                lat: {{ $default_location ? $default_location['lat'] : '23.757989' }},
                lng: {{ $default_location ? $default_location['lng'] : '90.360587' }}
            };
            let map = new google.maps.Map(document.getElementById("map"), {
                zoom: 13,
                center: myLatlng,
            });
            var zonePolygon = null;
            let infoWindow = new google.maps.InfoWindow({
                content: "Click map to get Lat/Lng!",
                position: myLatlng,
            });
            var bounds = new google.maps.LatLngBounds();

            function initMap() {
                // Create the initial InfoWindow.
                infoWindow.open(map);
                //get current location block
                infoWindow = new google.maps.InfoWindow();
                // Try HTML5 geolocation.
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        (position) => {
                            myLatlng = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude,
                            };
                            infoWindow.setPosition(myLatlng);
                            infoWindow.setContent("Location found.");
                            infoWindow.open(map);
                            map.setCenter(myLatlng);
                        },
                        () => {
                            handleLocationError(true, infoWindow, map.getCenter());
                        }
                    );
                } else {
                    // Browser doesn't support Geolocation
                    handleLocationError(false, infoWindow, map.getCenter());
                }
                //-----end block------
                // Create the search box and link it to the UI element.
            const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);
            let markers = [];
            searchBox.addListener("places_changed", () => {
                const places = searchBox.getPlaces();

                if (places.length == 0) {
                return;
                }
                // Clear out the old markers.
                markers.forEach((marker) => {
                marker.setMap(null);
                });
                markers = [];
                // For each place, get the icon, name and location.
                const bounds = new google.maps.LatLngBounds();
                places.forEach((place) => {
                if (!place.geometry || !place.geometry.location) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                const icon = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25),
                };
                // Create a marker for each place.
                markers.push(
                    new google.maps.Marker({
                    map,
                    icon,
                    title: place.name,
                    position: place.geometry.location,
                    })
                );

                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
                });
                map.fitBounds(bounds);
            });
            }
            initMap();

            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                infoWindow.setPosition(pos);
                infoWindow.setContent(
                    browserHasGeolocation ?
                    "Error: Please Select Zone and Click on the Map" :
                    "Error: Your browser doesn't support geolocation."
                );
                infoWindow.open(map);
            }
            $('#choice_zones').on('change', function() {
                var id = $(this).val();
                $.get({
                    url: '{{ url('/') }}/admin/zone/get-coordinates/' + id,
                    dataType: 'json',
                    success: function(data) {
                        if (zonePolygon) {
                            zonePolygon.setMap(null);
                        }
                        zonePolygon = new google.maps.Polygon({
                            paths: data.coordinates,
                            strokeColor: "#FF0000",
                            strokeOpacity: 0.8,
                            strokeWeight: 2,
                            fillColor: 'white',
                            fillOpacity: 0,
                        });
                        zonePolygon.setMap(map);
                        zonePolygon.getPaths().forEach(function(path) {
                            path.forEach(function(latlng) {
                                bounds.extend(latlng);
                                map.fitBounds(bounds);
                            });
                        });
                        map.setCenter(data.center);
                        google.maps.event.addListener(zonePolygon, 'click', function(mapsMouseEvent) {
                           infoWindow.close();
                            // Create a new InfoWindow.
                            infoWindow = new google.maps.InfoWindow({
                                position: mapsMouseEvent.latLng,
                                content: "Marked",
                               // content: JSON.stringify(mapsMouseEvent.latLng.toJSON(),
                               //     null, 2),
                            }); 
                            var coordinates = JSON.stringify(mapsMouseEvent.latLng.toJSON(), null,
                                2);
                            var coordinates = JSON.parse(coordinates);

                            document.getElementById('latitude').value = coordinates['lat'];
                            document.getElementById('longitude').value = coordinates['lng'];
                            infoWindow.open(map);
                        });
                    },
                });
            });
        </script>
    @endpush
