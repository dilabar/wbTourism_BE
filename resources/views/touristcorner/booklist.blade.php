@extends('layouts.myapp')

@section('content')
<div class="pt-100">
    <div class="section-title title-style">
        <h2>Tourism Brocures</h2>
    </div>
    <section class="tourism_brochure">
        <div class="container">
            <div class="row">
                @foreach ($book_list as $list)
                <div class="col-md-3">
                    <div class="card">
                        <a href="{{ route('book-detail', [$list->name]) }}">
                            <img class="img-responsive w-100" src="{{ $list->thumbnail_image}}">
                            <div>{{ $list->name }}</div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


    </section>

</div>

@endsection
