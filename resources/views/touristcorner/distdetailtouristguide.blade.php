@extends('layouts.myapp')
@section('content')
<section class="pt-100">
    <div class="section-title title-style">
        <h2>LIST OF REGISTERED TOURIST GUIDES (DISTRICT: DARJEELING )</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="">
                <table id="example" class="table table-bordered table-striped table-hover display">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">District</th>
                          <th scope="col">Category</th>
                          <th scope="col">Name</th>
                          <th scope="col">Photo</th>
                          <th scope="col">Contact Info</th>
                        </tr>
                      </thead>
                     @if(count($guidelist) > 0)
                    <tbody>
                        @foreach($guidelist as $key => $glist)
                        
                        <tr>
                            <td>{{ $key + 1}}</td>
                            <td> 
                                {{$glist->district_name}}
                            </td>
                            <td>
                                {{$glist->category}}
                            </td>
                            <td> 
                                {{$glist->name}}
                            </td>
                            <td> 
                                <img src="{{$glist->guide_image}}" height="80"width="80"/>
                            </td>
                            <td> 
                                {{$glist->contact_info}}
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


