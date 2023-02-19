@extends('layouts.myapp')

@section('content')
    <section class="pt-100">
        <div class="container">
            <form action="/search">
                <input type="text" value="{{ @$searchParam }}" placeholder="Search here.." name="search">
                <button class="btn btn-sm btn-warning">Search</button>
            </form>
            <div class="text-center">
                <h3 class="font-weight-bold">Search Results</h3>
            </div>
            <div class="">
                <h3 class="border-bottom">Detail page</h3>
            </div>
            @foreach ($detailpage as $item)
                <div class="card mb-1">
                    <a href="{{ $item->url }}">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ @$item->img ? @$item->img : asset('assets/img/default/loding_logo.png') }}" alt="">
                            </div>
                            <div class="col-md-9">
                                @if ($item != null)
                                    <h3>{{ $item->name }}  <span>{{ @$item->attraction_name }}</span></h3>
                                    <p>{{ $item->desc }}</p>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
