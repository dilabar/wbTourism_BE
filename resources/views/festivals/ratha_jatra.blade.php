@extends('layouts.myapp')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/viewer.min.css') }}">
@endsection
@section('content')
    <section class="pt-100">
        <div class="section-title title-style">
            <h2>Festival Rath Jatra</h2>
        </div>
        <div class="col-md-10 offset-1">
            <div class="event_tourism_gallery">
                <ul id="gallery">
                    @isset($rathjatra_image_list)
                        @foreach ($rathjatra_image_list as $item)
                            <li>
                                <div class="overLay">
                                    {{-- <a href="{{ route('btifbyid', [$item->id, $item->name]) }}"> --}}
                                    @if ($item->img)
                                        <img data-src="{{ $item->img }}"
                                            src="{{ asset('assets/img/default/loding_logo.png') }}" id="picture" width="285"
                                            height="230" alt="{{ $item->name }}">
                                    @endif
                                    @if ($item->youtube_link)
                                        <iframe src="{{ $item->youtube_link }}" frameborder="0" height="250"
                                            allowfullscreen></iframe>
                                    @endif
                                    {{-- </a> --}}
                                    <div class="layer">
                                        {{-- <p class="name text-capitalize"> {{ $item->name }}
                                </p> --}}
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endisset
                </ul>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="{{ asset('assets/js/viewer.min.js') }}"></script>
    <script>
        const gallery = new Viewer(document.getElementById('gallery'), {
            inline: false,
            rotatable: false,
            scalable: false,
            zoomable: false,
            movable: false
        });
    </script>
@endsection
