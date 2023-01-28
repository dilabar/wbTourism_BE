@extends('layouts.myapp')

@section('content')
<section class="pt-100">
    <div class="section-title title-style">
        <h2>Tourism{{$book_detail->name}}</h2>

    </div>
    <div class="book_detail">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="card">
                        <img class="img-responsive w-100" src="{{ $book_detail->thumbnail_image}}">
                        <div class="position-absolute top-50 bottom-50 pdf_detail">
                            {{-- <a class="btn btn-secondary btn-sm "  target="_blank">View</a> --}}
                            <button onclick="openPDF('{{$book_detail->pdf}}')">View </button>
                            <button class="btn btn-secondary btn-sm "
                                onclick="downloadpdf('{{ $book_detail->pdf}}')">Download </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            {{-- <a class="btn"
                href=""
                target="_blank">Download PDF</a>
        54</div> --}}
        </div>
</section>

@endsection
@section('script')
    <script>
    function openPDF(base64String) {

        // console.log('open pdf clicked');
         window.open(base64String);
    }


    function downloadpdf(base64String) {
        const tempLink = document.createElement('a');
        tempLink.href = base64String;
        tempLink.setAttribute('download', '{{ $book_detail->name }}' + '.pdf');
        tempLink.click();
    }
</script>
@endsection

