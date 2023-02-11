@extends('layouts.myapp')

@section('content')
    <section id="tsp-section" class="pt-100">
        <div class="container">
            <div class="section-title title-style">
                <h2>WEST BENGAL TOURISM HOMESTAY</h2>
            </div>
            <div class="row">
                @if ($dist_wise_home_stay != null)
                    @foreach ($dist_wise_home_stay as $home_stay_data)
                        <div class="col-lg-4  mb-2">
                            <div class="card">
                                <div class="card-header">
                                    <span class="text-center">{{ $home_stay_data->homestay_name }}</span>
                                </div>
                                <p class="p-3"><b>Address:</b> {{ $home_stay_data->address }}<br /><b>Contact No:</b>
                                    {{ $home_stay_data->contact_no }}<br /><b>Email:</b> {{ $home_stay_data->email }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
