@extends('layouts.myapp')

@section('content')
    <section id="tsp-section" class="pt-100">
        <div class="container">
            <div class="section-title title-style">
                <h2>WEST BENGAL TOURISM HOMESTAY</h2>
            </div>
            {{-- <div class="row">
                <div class="section-title title-style">
                    <h2>DARJEELING HOMESTAY</h2>
                </div>
            </div> --}}
            <div class="row hsty">
                @isset($homestay_tab_data)
                    @foreach ($homestay_tab_data as $tab_data)
                        <div class="col-lg-4  mb-2">
                            <a href="{{ route('dist-wise-home-stay', $tab_data->district_code) }}">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="text-center">{{ $tab_data->district_name }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </section>
@endsection
