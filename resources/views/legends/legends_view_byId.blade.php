@extends('layouts.myapp')

@section('content')
    <section class="pt-100">
        <div class="container">
            <div class="section-title title-style">
                <h2>{{ $hedding_name }}</h2>
            </div>
            <div class="text-center">
                <div>
                    <img data-src="{{ $legend_view->img }}" src="{{ asset('assets/img/default/loding_logo.png') }}" id="picture"
                        width="285" height="230" alt="{{ $legend_view->name }}">
                </div>
            </div>
            <p class="text-center">{{ $legend_view->name }}</p>
            <div class="col-md-8 offset-2">
                <div class="bgcolor">
                    <p class="text3">{!! $legend_view->about !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
