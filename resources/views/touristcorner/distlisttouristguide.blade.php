@extends('layouts.myapp')
<style>
.dislist ul{list-style: none;}
.dislist ul li .card{ background-color: #cde7ca;}
.dislist ul li .card:hover{
    background: linear-gradient(90deg, var(--primary-color), transparent) !important;
    color: var(--dark-color);
    box-shadow: var(--box-shadow);
}
.dislist ul li .card a{color:var(--dark-color);}
</style>
@section('content')
    <section class="pt-100">
        <div class="section-title title-style">
            <h2>DISTRICTWISE REGISTERED TOURIST GUIDES</h2>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="dislist">
                        <div class="row">
                            @foreach ($district as $dlist)
                                <div class="col-md-3">
                                    <ul>
                                        <li>
                                            <div class="card p-3 mb-2">
                                                <a href="{{route('distdetail',['slug'=>$dlist->district_code])}}" class="text-center"> {{ $dlist->district_name }}</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
