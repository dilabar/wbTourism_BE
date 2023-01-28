@extends('layouts.myapp')

@section('content')
<section class="pt-100">
    <div class="section-title title-style">
        <h2>TEA TOURISM POLICY</h2>

    </div>
    <div class="tourism_policy"> 
        <ul>
            <li>
                <div class="picture">  
                    <a href="https://www.wbtourism.gov.in/home/download/pdf/Tea_Tourism_Policy_2019.pdf" target="_blank">  
                    <img src="{{asset('assets/img/tea_tourism_policy_2019.jpg')}}" alt="tourism policy 2016">
                    </a>
                </div> 
                <h2 class="year">2019</h2>      
            </li>
        </ul>
    </div>
</section>

@endsection
