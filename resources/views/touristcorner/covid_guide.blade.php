@extends('layouts.myapp')

@section('content')
<section class="pt-100">
    <div class="section-title title-style">
        <h2>COVID 19 - GOVT. OF WEST BENGAL GUIDELINES AND MEASURES</h2>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="event_aware">
                    <a href="{{ asset('assets/img/covid-guidline/be_safe.pdf') }}"
                        target="_blank"><img class="imageResponsive"
                            src="{{ asset('assets/img/covid-guidline/be_alert.jpg') }}"
                            alt="covid-19 awareness" title="covid-19 awareness"></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="event_aware">
                    <a href="{{ asset('assets/img/covid-guidline/coronavirus_eng.pdf') }}"
                        target="_blank"><img class="imageResponsive"
                            src="{{ asset('assets/img/covid-guidline/panic.jpg') }}" alt="covid-19 awareness"
                            title="covid-19 awareness"></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
