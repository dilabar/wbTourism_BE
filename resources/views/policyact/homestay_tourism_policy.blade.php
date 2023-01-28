@extends('layouts.myapp')

@section('content')
<section class="pt-100">
    <div class="section-title title-style">
        <h2>HOME STAY TOURISM POLICY</h2>

    </div>
    <div class="tourism_policy"> 
        <ul>
        	<li>
                <div class="picture">  
                    <a href="https://www.wbtourism.gov.in/home/download/pdf/notification_wb_homestay_tourism_policy_2022.pdf" title="Homestay Tourism Policy 2017" target="_blank">  
                    <img src="{{asset('assets/img/wb_homestay_policy_2022.jpg')}}" alt="home stay tourism policy 2022">
                    </a>
                </div> 
                <h2 class="year_cap">2022</h2>      
            </li>
            <li>
                <div class="picture">  
                    <a href="https://www.wbtourism.gov.in/home/download/pdf/west_bengal_homestay_tourism_policy_2017_old.pdf" title="Homestay Tourism Policy 2017" target="_blank">  
                    <img src="{{asset('assets/img/home_stay_tourism_policy_2017.jpg')}}" alt="home stay tourism policy 2017">
                    </a>
                </div> 
                <h2 class="year_cap">2017</h2>      
            </li>
            <li>
                <div class="picture">  
                    <a href="https://www.wbtourism.gov.in/home/download/pdf/west_bengal_homestay_tourism_policy_2017.pdf" title="Homestay Tourism Policy 2017" target="_blank"> 
                    <img src="{{asset('assets/img/home_sttay_tourism_policy_2017_revision.jpg')}}" alt="home sttay tourism policy 2017 revision">
                    </a>
                </div> 
                <h2 class="year_cap">2017 REVISION</h2>      
            </li>
            <li>
                <div class="picture">  
                    <a href="https://www.wbtourism.gov.in/home/download/annexures/annexure_all_com.pdf" title="Homestay Registration Application" target="_blank">  
                    <img src="{{asset('assets/img/homestay_policy_registration_form.jpg')}}" alt="home sttay tourism policy 2017 revision">
                    </a>
                </div> 
                <h2 class="year_cap">REGISTRATION FORM</h2>      
            </li>
        </ul>
    </div>
</section>

@endsection
