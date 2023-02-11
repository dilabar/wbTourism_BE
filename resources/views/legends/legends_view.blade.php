@extends('layouts.myapp')

@section('content')
<div class="page-title-area ptb-100">
    <div class="container">
      <div class="page-title-content">
        <h1 style="margin-top: 15%">Legends Of Bengal</h1>
        {{-- <p class="text-light"></p> --}}
      </div>
    </div>
    <div class="bg-image">
      <img src="{{ asset('assets/img/legends_banner.jpg') }}" alt="Demo Image">
    </div>
  </div>
<section class="pt-100">
    {{-- <div class="section-title title-style">
        <h2>Legends of Bengal</h2>
    </div> --}}
    <div class="col-md-10 offset-1">
        <div class="event_tourism_gallery">
            <ul id="gallery">
                @foreach ($legends_list as $item)
                    <li>
                        <div class="overLay">
                            <a href="{{ route('legends-view-byId', [$item->id, $item->name]) }}">
                                <img data-src="{{ $item->img }}" src="{{ asset('assets/img/default/loding_logo.png') }}"
                                    id="picture" width="285" height="230" alt="{{ $item->name }}">
                                </a>
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
