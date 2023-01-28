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
            <h2>BOARD OF DIRECTORS - WBTDCL</h2>

        </div>
        <div class="container">
            <div class="row justify-content-center">
                <table class="table table-hover table-bordered table-striped" cellspacing="1" cellpadding="0">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">1</td>
                            <td>Shri Babul Supriyo<br>
                                Hon'ble Minister-in-Charge, Tourism Department, Government of West Bengal</td>
                            <td>Chairman</td>
                        </tr>
                        <tr>
                            <td align="center">2</td>
                            <td>Smt Sayantika Banerjee</td>
                            <td>Vice Chairman</td>
                        </tr>
                        <tr>
                            <td align="center">3</td>
                            <td>Dr. Saumitra Mohan, IAS<br>
                                Secretary, Tourism Department, Government of West Bengal</td>
                            <td>Director</td>
                        </tr>
                        <tr>
                            <td align="center">4</td>
                            <td>Shri Ritendra Narayan Basu Roy Choudhury, IAS<br>
                                Managing Director, West Bengal Tourism Development Corporation Limited
                            </td>
                            <td>Managing Director</td>
                        </tr>
                        <tr>
                            <td align="center">5</td>
                            <td>Shri Tapas Kumar Haldar<br>
                                Financial Advisor, Tourism Department, Government of West Bengal</td>
                            <td>Director</td>
                        </tr>
                        <tr>
                            <td align="center">6</td>
                            <td>Shri Karan Paul<br>
                                Chairperson, Apeejay Surendra Group</td>
                            <td>Director</td>
                        </tr>
                        <tr>
                            <td align="center">7</td>
                            <td>Shri Harshavardhan Neotia<br>
                                Chairman, Ambuja Neotia Group</td>
                            <td>Director</td>
                        </tr>
                        <tr>
                            <td align="center">8</td>
                            <td>Shri Rudra Chatterjee<br>
                                Managing Director, Luxmi Tea</td>
                            <td>Director</td>
                        </tr>
                        <tr>
                            <td align="center">9</td>
                            <td>Shri Mehul Mohanka<br>
                                MD &amp; Group CEO, Tega Industries and Senior Vice President, Indian Chamber of
                                Commerce</td>
                            <td>Director</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</section>

@endsection
