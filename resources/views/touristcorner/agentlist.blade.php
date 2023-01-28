@extends('layouts.myapp')
@section('content')
<section class="pt-100">
    <div class="section-title title-style">
        <h2>Marketing <span style="color:#518117;">A</span><span style="color:#067C67">g</span><span
            style="color: #0E538D;">e</span><span style="color: #4D4788;">n</span><span
            style="color:#874784 ;">t</span></h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="">
                <table id="example" class="table table-bordered table-striped table-hover display">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Agent Name</th>
                          <th scope="col">Address</th>
                          <th scope="col">Contact Person</th>
                          <th scope="col">Contact No</th>
                          <th scope="col">Email</th>
                        </tr>
                      </thead>
                    <tbody>
                        @foreach($agentlist as $key => $alist)
                        
                        <tr>
                            <td>{{ $key + 1}}</td>
                            <td>{{$alist->agent_name}}</td>
                            <td>{{$alist->address}}</td>
                            <td>{{$alist->contact_person}} </td>
                            <td>{{$alist->contact_no}}</td>
                            <td>{{$alist->email}}</td>
                        </tr>
                        @endforeach
                    </tbody>
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


