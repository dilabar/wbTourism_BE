@extends('layouts.myapp')

@section('content')
    <section class="eg pt-100">
        <div class="section-title title-style">
            <h2>Other Events Gallery</h2>
        </div>
        {{-- <h2 class="headding2">World Heritage Global Strategy 21-22 February 2019 </h2> --}}
        {{-- <p class="text-center">Date: 21 Feb 2019</p> --}}
        <div class="col-md-10 offset-1">
            <div class="photoGallery">
                <ul id="gallery">
                    @foreach ($oth_event_gallery_list as $item)
                        <li>
                            <div class="overLay">
                                <a href="{{ route('btifbyid', [$item->id, $item->name]) }}">
                                    <img data-src="{{ $item->img }}" src="{{ asset('assets/img/default/loding_logo.png') }}"
                                        id="picture" width="285" height="230" alt="{{ $item->name }}"></a>
                                <div class="layer">
                                    <p class="name text-capitalize"> {{ $item->name }}
                                    </p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </section>

@endsection
