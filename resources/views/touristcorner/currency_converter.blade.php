@extends('layouts.myapp')

@section('content')
<section class="pt-80">
    <div class="b-image">
        <img src="{{asset('assets/img/misson_banner.jpg')}}"/>
    </div>
    <div class="section-title title-style">
        <h2>Currency <span style="color:#518117;">C</span><span style="color:#067C67">o</span><span
            style="color: #0E538D;">n</span><span style="color: #4D4788;">v</span><span
            style="color:#874784 ;">e</span><span style="color: #D12150;">r</span><span
            style="color: #F48C18;">t</span>er</h2>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="currency_link">
                <a href="http://www.fx-exchange.com/">
                    Currency Converter
                </a>
            </div>         
        </div>
    </div>
</section>

@endsection
