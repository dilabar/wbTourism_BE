@extends('layouts.myapp')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/viewer.min.css') }}">
@endsection
@section('content')
    <section class="pt-100">
        <div class="section-title title-style">
            <h2 class="text-capitalize">INAUGURATION GALLERY</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="inauguration-gallery" id="gallery">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/inauguration_2017.jpg') }}"
                                    alt="Durgapuja website and mobile app 2017" />
                                <p class="p-2">Durgapuja website and mobile app 2017</p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/inauguration_kolkata_connect.jpg') }}"
                                    alt="inauguration kolkata connect" />
                                <p class="p-2">Kolkata Connect 13th October, 2020</p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/inauguration_2017.jpg') }}"
                                    alt="Beautification of Jagannath Mandir at Mahesh" />
                                <p class="p-2">Beautification of Jagannath Mandir at Mahesh, 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
@section('script')
    <script src="{{ asset('assets/js/viewer.min.js') }}"></script>
    <script>
        const gallery = new Viewer(document.getElementById('gallery'), {
            inline: false,
            rotatable: false,
            scalable: false,
            zoomable: false,
            movable: false
        });
    </script>
@endsection
