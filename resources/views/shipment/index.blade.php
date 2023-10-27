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
                                            Billing Name</th>
                                        <th class="align-middle">
                                            Date</th>
                                        <th class="align-middle">
                                            Store Name</th>
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
                                       <td>{{$list->fullname}}</td>
                                       <td>
                                           {{$list->datetime}}
                                       </td>
                                       <td>
                                       {{$list->storename}}
                                       </td>
                                       <td>
                                       {{$list->tracking_number}}  
                                       </td>
                                       <td>
                                       <span
                                               class="badge badge-pill
                                                                   badge-soft-warning
                                                                   font-size-11">Pending</span>
                                       </td>
                                       <td>
                                           <!-- Button trigger modal -->
                                           <button type="button"
                                               class="btn btn-primary btn-sm
                                                                   btn-rounded waves-effect
                                                                   waves-light"
                                               data-bs-toggle="modal"
                                               data-bs-target=".orderdetailsModal">
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
     <!-- Modal -->
     <div class="modal fade orderdetailsModal" tabindex="-1" role="dialog" aria-labelledby=orderdetailsModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id=orderdetailsModalLabel">Order Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div>
                                @foreach($ship as $list)
                                <p class="mb-2">Product id: <span class="text-primary">{{$list->shipid}}</span></p>
                                <p class="mb-4">Billing Name: <span class="text-primary">{{$list->fullname}}</span></p>
                                @endforeach
                                </div>

                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap">
                                        <thead>
                                            <tr>
                                            <th scope="col">Product</th>
                                            <th scope="col">Store Name</th>
                                            <th scope="col">Tracking ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($ship as $list)
                                            <tr>
                                                <th scope="row">
                                                    <div>
                                                        <img src="assets/images/product/package1.jpg" alt="" class="avatar-sm">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14">{{$list->storename}}</h5>
                                            
                                                    </div>
                                                </td>
                                                <td>{{$list->tracking_number}}</td>
                                            </tr>
                                            
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Package Description:</h6>
                                                </td>
                                                <td>
                                                {{$list->package_descp}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Estimated Arrival Date</h6>
                                                </td>
                                                <td>
                                                {{$list->package_to}}
                                                </td>
                                            </tr>
                                            
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal -->
</div>
@endsection