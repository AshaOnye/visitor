@extends('layouts.layout')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div
                    class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Create Order</h4>



                </div>
            </div>
        </div>
        <!-- end page title -->



        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Order Form</h4>
                <p class="card-title-desc"></p>

                <form class="custom-validation" action="/create" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-6 mb-3">
                            <label class="form-label">Full Name(please provide the name used to place your online order)</label>
                            <input type="text" name="fullname"
                                class="form-control" required
                                placeholder="enter full name" />
                        </div>
                        <div class=" col-md-6 col-sm-6  mb-3">
                            <label class="form-label">Online Store
                                Name</label>
                            <input type="text" class="form-control"
                                name="storename" required
                                placeholder="enter store name" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 mb-3">
                            <label class="form-label">Tracking Number of item</label>
                            <input type="text" name="tracking_number"
                                class="form-control" required
                                placeholder="tracking number" />
                        </div>
                        <div class="col-md-6 col-sm-6 mb-3">
                            <label class="form-label">Order Number(id) of item</label>
                            <input type="text" name="order_number"
                                class="form-control" required
                                placeholder="enter order id" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 mb-3">
                            <label class="form-label">Package Expected Time of Arrival(from)</label>
                            <input type="date" name="package_from"
                                class="form-control" required />
                        </div>
                        <div class="col-md-6 col-sm-6 mb-3">
                            <label class="form-label">Package Expected Time of Arrival(to)</label>
                            <input type="date" name="package_to"
                                class="form-control" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 mb-3">
                            <label class="form-label">Upload Receipt (or upload screenshot of evidence of placed order)</label>
                            <input type="file" name="upload"
                                onChange="readURL(this);" class="form-control"
                                name="data" accept="image/jpeg">
                        </div>
                        <div class="col-md-6 col-sm-6 mb-3">
                            <label class="form-label">Delivery Option</label>
                            <div>
                                <select class="form-control"
                                    name="delivery_option">
                                    <option>Home Delivery</option>
                                    <option>Branch Pickup</option>
                                </select>
                            </div>

                        </div>
                        
                            <div class="col-md-12 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Package
                                        Description</label>
                                    <textarea required class="form-control"
                                        name="package_descp" rows=""></textarea>
                                </div>
                            </div>
                        
                    </div>

                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit"
                            class="btn btn-primary waves-effect waves-light">
                            Submit
                        </button>
                        <button type="reset"
                            class="btn btn-secondary waves-effect">
                            Cancel
                        </button>
                    </div>
                </form>

            </div>
        </div>

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection