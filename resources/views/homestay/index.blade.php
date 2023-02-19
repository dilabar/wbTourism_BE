@extends('layouts.myapp')

@section('content')

<section id="tsp-section" class="pt-100">
    <div class="container">
        <div class="section-title title-style">
            <h2>WEST BENGAL TOURISM HOMESTAY</h2>
        </div>
        <div class="row hsty">
            <div class="col-lg-4">
                <a href="{{ asset('assets/pdf/homestay/west_bengal_homestay_tourism_policy_2017_old.pdf') }}" target="_blank">
                    <div class=" card p-3 mb-2">
                        <span class="text-center">Home Stay Tourism Policy 2017</span>
                    </div>
                </a>

            </div>

            <div class="col-lg-4">
                <a href="{{ asset('assets/pdf/homestay/west_bengal_homestay_tourism_policy_2017.pdf')}}" target="_blank">
                    <div class="card p-3 mb-2">
                        <span class="text-center">Home Stay Tourism Policy 2017 Revision</span>
                    </div>
                </a>

            </div>


            <div class="col-lg-4">
                <a href="{{ asset('assets/pdf/homestay/annexures/annexure_all_com.pdf')}}" target="_blank">
                    <div class="card p-3 mb-2">
                        <span class="text-center">Home Stay Tourism Policy 2017 Registration Form</span>
                    </div>
                </a>

            </div>

            <div class="col-lg-4">
                <a href="http://wbtpms.in/" target="_blank">
                    <div class="card p-3 mb-2">
                        <span class="text-center">TPMS (office use only)</span>
                    </div>
                </a>
            </div>


            <div class="col-lg-4">
                <a href="http://49.50.66.67/tpms" target="_blank">
                    <div class="card p-3 mb-2">
                        <span class="text-center">Apply Online</span>
                    </div>
                </a>

            </div>


        </div>

    </div>
</section>
@endsection
