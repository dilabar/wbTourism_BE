@extends('layouts.myapp')

@section('content')
<section class="pt-100">
    <div class="section-title title-style">
        <h2>BENGAL GLOBAL BUSINESS SUMMIT</h2>
    </div>
    <div class="col-md-10 offset-1">
        <div class="event_tourism_gallery">
            <ul id="gallery">
                @foreach ($bgbs_list as $item)
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
