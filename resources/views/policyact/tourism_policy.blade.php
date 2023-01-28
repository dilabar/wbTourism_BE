@extends('layouts.myapp')

@section('content')
<section class="pt-100">
    <div class="section-title title-style">
        <h2>Tourism Policy</h2>

    </div>
    <div class="tourism_policy"> 
        <ul>
            <li>
                <div class="picture">  
                    <a href="https://www.wbtourism.gov.in/tourism_policy/html/index.html" target="_blank">  
                    <img src="{{asset('assets/img/tourism_policy_2016.jpg')}}" alt="tourism policy 2016">
                    </a>
                </div> 
                <h2 class="year">2016</h2>      
            </li>
            <li>
                <div class="picture">  
                    <a href="https://www.wbtourism.gov.in/home/download/pdf/west_bengal_tourism_policy_2019.pdf" title="Tourism Policy 2019" target="_blank">  
                    <img src="{{asset('assets/img/tourism_policy_2019.jpg')}}" alt="tourism policy 2019">
                    </a>
                </div> 
                <h2 class="year">2019</h2>      
            </li>
        </ul>
    </div>
</section>

@endsection
