@extends('layouts.myapp')
<style>
    .marketlist {
        background-color: #eee;
        padding:40px
    }

    .marketlist img {
        width: 100%;
        height: auto;
    }
    .marketlist p {
        font-size:14px;
        padding: 0;
    }
    .marketlist h4{margin top:10px}
</style>
@section('content')
    <section class="pt-100">
        <div class="section-title title-style">
            <h2>Experience <span style="color:#518117;">B</span><span style="color:#067C67">e</span><span
                    style="color: #0E538D;">n</span><span style="color: #4D4788;">g</span><span
                    style="color:#874784 ;">a</span><span style="color: #D12150;">l</span></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Article</h3>
                    <div class="marketlist">
                        <div class="row justify-content-center p-2">
                            @foreach ($article as $alist)
                                <div class="col-md-4">
                                    <a href="http://www.biswabangla.in" target="_blank">
                                        <img src="{{$alist->article_image}}" alt="#">
                                    </a>
                                    <p>{{$alist->date}}</p>
                                    <h4 class=""><strong>{{ $alist->name }}</strong></h4>
                                    <p>{{$alist->short_description}}"</p>
                                    <p class="">{{ $alist->making}}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
