@extends('layouts.myapp')

@section('content')
<section class="pt-100">
    <div class="section-title title-style">
        <h2>KOLKATA CHRISTMAS FESTIVAL</h2>
    </div>
    <div class="col-md-10 offset-1">
        <div class="event_tourism_gallery">
            <p>Kolkata Christmas Festival is held annually during the month of December in Kolkata on Park Street,
                Kolkata, which is one of the largest dedicated Christmas carnivals in India. In this festival various
                Bands and choir groups perform on the stage at Allen Park on Park Street. A two-hour Christmas Parade is
                also organized on one of the days in which allows around 500 school children to participate.</p>
                <ul id="gallery">
                    @foreach ($kol_fest_list as $item)
                    <li >
                        <div class="overLay">
                            <a href="{{ route('btifbyid',[$item->id,$item->name]) }}">
                                <img data-src="{{ $item->img }}" src="{{ asset('assets/img/default/loding_logo.png')}}"  id="picture" width="285" height="230"
                                    alt="{{$item->name}}"></a>
                            <div class="layer">
                                <p class="name text-capitalize"> {{$item->name}}
                                </p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
        </div>
    </div>

</section>

@endsection
