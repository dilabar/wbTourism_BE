@extends('layouts.myapp')

@section('content')
<section class="pt-100">
    <div class="section-title title-style">
        <h2>PARYATAN SAHAYATA PRAKALPA</h2>

    </div>
    <div class="tourism_policy"> 
        <ul>
            <li>
                <div class="picture">  
                    <a href="https://www.wbtourism.gov.in/home/download/pdf/paryatan_sahayata_prokolpo.pdf" title="Paryatan Sahayata Prokolpo 2021" target="_blank">  
                    <img src="{{asset('assets/img/paryatan_sahayata_prokolpo_2021.jpg')}}" alt="paryatan sahayata prokolpo">
                    </a>
                </div> 
                <h2 class="year">2021</h2>      
            </li>
        </ul>
    </div>
</section>

@endsection
