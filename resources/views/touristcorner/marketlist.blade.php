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
            <h2>Malls & <span style="color:#518117;">M</span><span style="color:#067C67">a</span><span
                    style="color: #0E538D;">r</span><span style="color: #4D4788;">k</span><span
                    style="color:#874784 ;">e</span><span style="color: #D12150;">t</span><span
                    style="color: #F48C18;">s</span></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="marketlist">
                        <div class="row justify-content-center p-2">
                            @foreach ($marketlist as $mlist)
                                <div class="col-md-4">
                                    <a href="http://www.biswabangla.in" target="_blank">
                                        <img src="{{$mlist->market_image}}" alt="#">
                                    </a>
                                    <h4 class="text-center"><strong>{{ $mlist->name }}</strong></h4>
                                    <p class="text-center">{{ $mlist->address }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
