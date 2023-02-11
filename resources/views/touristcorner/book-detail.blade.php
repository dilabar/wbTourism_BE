@extends('layouts.myapp')

@section('content')
    <section class="pt-100">
        <div class="section-title title-style">
            <h2>Tourism{{ $book_detail->name }}</h2>

        </div>
        <div class="book_detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="card">
                            <img class="img-responsive w-100" src="{{ $book_detail->thumbnail_image }}">
                            <div class="position-absolute top-50 bottom-50 pdf_detail">
                                {{-- <a class="btn btn-secondary btn-sm "  target="_blank">View</a> --}}
                                <button  data-bs-toggle="modal" onclick="openPDF('{{ $book_detail->pdf }}')" data-bs-target="#staticBackdrop">View </button>
                                <button class="btn btn-secondary btn-sm "
                                    onclick="downloadpdf('{{ $book_detail->pdf }}')">Download </button>
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
    <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button> --}}
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <embed src="{{ $book_detail->pdf }}" type="application/pdf" width="100%" height="600">
            {{-- <iframe src="{{ $book_detail->pdf }}" width="100%" height="600"></iframe> --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
    <script>
        function openPDF(base64String) {

            console.log(base64String);
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
