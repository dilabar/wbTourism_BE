@extends('layouts.myapp')
@section('content')
<section class="pt-100">
    <div class="section-title title-style">
        <h2>NEWSLETTER</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="">
                <table id="example" class="table table-bordered table-striped table-hover display">
                    <thead>
                        <tr>
                          <th scope="col">Sl</th>
                          <th scope="col">Newsletter No</th>
                          <th scope="col">Newsletter Date</th>
                          <th scope="col">Newsletter Subject</th>
                          <th scope="col">Download</th>
                        </tr>
                      </thead>
                     @if(count($newsletter) > 0)
                    <tbody>
                        @foreach($newsletter as $key => $newslist)
                        
                        <tr>
                            <td>{{ $key + 1}}</td>
                            <td> 
                                {{$newslist->newsletter_no}}
                            </td>
                            <td>
                                {{$newslist->newsletter_date}}
                            </td>
                            <td> 
                                {{$newslist->name}}
                            </td>
                            <td> 
                                <a class="download"href="https://www.wbtourism.gov.in/home/download/newsletter/newsletter_sept_2022.pdf"><i class="bx bx-download"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    @else
                    <tfoot>
                        <tr><td colspan="6" class="td_center">No Record Found</td></tr>
                    </tfoot>
                    @endif
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
      
        $("#example").DataTable({
          "Sort":false,
          "Paginate":true,
          "bLengthChange":false,
          "bInfo":false,
          "PaginationType":"full_numbers",
           "iDisplayLength": 10
        });
    });
    </script>
@endsection


