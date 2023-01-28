@extends('layouts.myapp')
@section('content')
<section class="pt-100">
    <div class="section-title title-style">
        <h2><span style="color:#518117;">C</span><span style="color:#067C67">o</span><span
            style="color: #0E538D;">n</span><span style="color: #4D4788;">s</span><span
            style="color:#874784 ;">u</span><span style="color: #D12150;">l</span><span
            style="color: #F48C18;">a</span>te</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="">
                <table  id="example" class="table table-bordered table-striped table-hover display">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Country</th>
                          <th scope="col">Office</th>
                          <th scope="col">Address</th>
                        </tr>
                      </thead>
                    <tbody>
                        @foreach($consulate_list as $key=> $cl)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td> 
                               {{$cl->country_name}} 
                            </td>
                            <td>
                                {{$cl->office_name}}
                            </td>
                            <td> 
                                {{$cl->address}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                 
                </table>
                {{-- <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav> --}}
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