@extends('layouts.layout')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center
                                        justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Shipments</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            <h4 class="card-title mb-4">Shipments</h4>
                        </div>
                        <div class="float-end"><a
                                href="{{ route('shipment.create') }}"
                                class="btn btn-dark btn-sm">Create New</a></div>
                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                      
                                        <th class="align-middle">
                                             ID</th>
                                        <th class="align-middle">
                                            Store Name</th>
                                        <th class="align-middle">
                                            Date</th>
                                        <th class="align-middle">
                                            Address</th>
                                        <th class="align-middle">
                                            Tracking ID</th>
                                        <th class="align-middle">
                                            Status</th>
                                        <th class="align-middle">
                                            View Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ship as $list)
                                   
                                    <tr>
                                       
                                       <td><a href="javascript: void(0);"
                                               class="text-body fw-bold"> {{$list->shipid}}</a>
                                       </td>
                                       <td>{{$list->storename}}</td>
                                       <td>
                                           {{$list->datetime}}
                                       </td>
                                       <td>
                                       {{$list->store_address}}
                                       </td>
                                       <td>
                                       {{$list->tracking_number}}  
                                       </td>
                                       <td>
                                       <span
                                               class="badge badge-pill
                                                                   badge-soft-success
                                                                   font-size-11">Paid</span>
                                       </td>
                                       <td>
                                           <!-- Button trigger modal -->
                                           <button type="button"
                                               class="btn btn-primary btn-sm
                                                                   btn-rounded waves-effect
                                                                   waves-light"
                                               data-bs-toggle="modal"
                                               data-bs-target=".transaction-detailModal">
                                               View Details
                                           </button>
                                       </td>
                                   </tr>
                                    @endforeach
                                    

                                                       </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- end row -->
        </div>
    <!-- container-fluid -->
</div>
@endsection