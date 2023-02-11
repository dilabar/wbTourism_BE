@extends('layouts.myapp')
@section('content')
<section class="pt-100">
    <div class="section-title title-style">
        <h2>{{ $name }}</h2>
    </div>
    <div class="container">
       
            <div class="">
                <embed src="{{$pdf}}" type="application/pdf" width="100%" >
                    {{-- <embed src="" type="application/pdf"> --}}
                        {{-- {!! $file !!} --}}
            </div>
            <iframe src="{{$pdf}}" width="100%" height="200px"></iframe>
            hi
    </div>
</section>
@endsection



