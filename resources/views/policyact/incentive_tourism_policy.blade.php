@extends('layouts.myapp')

@section('content')
<section class="pt-100">
    <div class="section-title title-style">
        <h2>INCENTIVE SCHEMES</h2>

    </div>
    <div class="tourism_policy"> 
        <ul>
            <li>
                <div class="picture">  
                    <a href="https://www.wbtourism.gov.in/incentive_scheme/html/index.html" target="_blank">  
                    <img src="{{asset('assets/img/incentive_schemes_2015.jpg')}}" alt="incentive schemes 2015">
                    </a>
                </div> 
                <h2 class="year">2015</h2>      
            </li>
            <li>
                <div class="picture">  
                    <a href="https://www.wbtourism.gov.in/home/download/pdf/wbis_2021.pdf" title="Incentive Scheme" target="_blank">  
                    <img src="{{asset('assets/img/incentive_schemes_2021.jpg')}}" alt="incentive schemes 2021">
                    </a>
                </div> 
                <h2 class="year">2021</h2>      
            </li>
        </ul>
    </div>
</section>

@endsection
