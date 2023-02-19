@extends('layouts.myapp')

@section('content')
    <section id="tsp-section" class="pt-100">
        <div class="container">
            <div class="section-title title-style">
                <h2>Tour Operator</h2>
            </div>



            <table class="table table-hover table-sm table-responsive" style="box-shadow: var(--box-shadow);">
                <thead class="" style="background-color: #5181171a">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">TSP Sub-Category</th>
                        <th scope="col">TSP Name</th>
                        <th scope="col">Registration Details</th>
                        <th scope="col"> Address</th>
                        <th scope="col">Contact Info.</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tsp_lists as $key => $tsp)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>
                                <span>{{ $tsp->tsp_sub_cat }}</span>
                            </td>
                            <td>
                                <span>{{ $tsp->tsp_name }}</span>
                            </td>
                            <td>
                                <span>{{ $tsp->reg_det }}</span>
                            </td>
                            <td>
                                <span>{{ $tsp->address }}</span>
                            </td>
                            <td>
                                <span>{{ $tsp->Contact_Info }}</span><br />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                @if (count($tsp_lists)<=0)
                    <tfoot>
                        <tr class="text-center"><td colspan="6">No Data Found.</td></tr>
                    </tfoot>
                @endif
            </table>
        </div>
    </section>
@endsection
