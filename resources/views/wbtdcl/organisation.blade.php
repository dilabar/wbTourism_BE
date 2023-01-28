@extends('layouts.myapp')

@section('content')
<section class="pt-80">
    <div class="">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <ul id="slider1" style="width: auto; position: relative;padding:0;margin:0;">
                    <li aria-hidden="true" class="carousel-item active">
                        <img src="{{ asset('assets/img/wbtdcl/bus.jpg') }}" class="banner_slider_img slider_img"
                            alt="wbtourism" title="wbtourism">
                    </li>
                    <li aria-hidden="true" class="carousel-item">
                        <img src="{{ asset('assets/img/wbtdcl/boat.jpg') }}" class="banner_slider_img slider_img"
                            alt="wbtourism" title="wbtourism">
                    </li>
                    <li aria-hidden="false" class="carousel-item">
                        <img src="{{ asset('assets/img/wbtdcl/howrah.jpg') }}" class="banner_slider_img slider_img"
                            alt="wbtourism" title="wbtourism">
                    </li>
                    <li aria-hidden="true" class="carousel-item">
                        <img src="{{ asset('assets/img/wbtdcl/victoria.jpg') }}" class="banner_slider_img slider_img"
                            alt="wbtourism" title="wbtourism">
                    </li>
                    <li aria-hidden="true" class="carousel-item">
                        <img src="{{ asset('assets/img/wbtdcl/second_hooghly.jpg') }}"
                            class="banner_slider_img slider_img" alt="wbtourism" title="wbtourism">
                    </li>
                    <li aria-hidden="true" class="carousel-item">
                        <img src="{{ asset('assets/img/wbtdcl/nico.jpg') }}" class="banner_slider_img slider_img"
                            alt="wbtourism" title="wbtourism">
                    </li>
                    <li aria-hidden="true" class="carousel-item">
                        <img src="{{ asset('assets/img/wbtdcl/niccopark_2.jpg') }}" class="banner_slider_img slider_img"
                            alt="wbtourism" title="wbtourism">
                    </li>
                    <li aria-hidden="true" class="carousel-item">
                        <img src="{{ asset('assets/img/wbtdcl/niccopark_3.jpg') }}" class="banner_slider_img slider_img"
                            alt="wbtourism" title="wbtourism">
                </ul>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="section-title title-style">
            <h2>About <span style="color:#518117;">W</span><span style="color:#067C67">b</span><span
                    style="color: #0E538D;">t</span><span style="color: #4D4788;">d</span><span
                    style="color:#874784 ;">c</span><span style="color: #D12150;">l</span>

        </div>
        <div class="container">
            <div class="bgcolor">
                <p class="text padding">The West Bengal Tourism Development Corporation Limited (WBTDCL) was
                    incorporated on
                    29th April, 1974 under the Companies Act, 1956. The Corporation is owned by Government of West
                    Bengal
                    under the administrative control of Tourism Department and the entire share capital of the Company
                    is
                    contributed by the State Government.</p>
                <p class="text padding"><strong>WBTDCL</strong> is a nodal agency of Tourism Department which was
                    incorporated with the objectives to develop and promote tourism in the state of West Bengal and for
                    this
                    purpose to take over, run and manage hotels, lodges, guest houses, motels, restaurants etc as well
                    as to
                    popularize tourist destinations in the state and conduct tour packages to those places.</p>
                <p class="text padding"><strong>WBTDCL</strong> is committed to provide its resources and expertise for
                    both
                    domestic and international tourists visiting West Bengal and to rise to their expectation in
                    experiencing the art, culture, heritage and nature of the state.</p>
                <p class="text padding">The Board of Directors is appointed by the State Government and in terms of
                    Notification no. 71-TW/IT-162/74, dt. 21.01.2014 issued by Tourism Department, Govt. of WB, the
                    Board of
                    Directors is reconstituted and is comprised of the following</p>
            </div>
        </div>

    </div>

</section>

@endsection
