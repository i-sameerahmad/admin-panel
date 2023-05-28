@extends('layouts/main')

@section('title', "about-page")

@section('contents')

<div style="margin-left: 40px ; height: 80px;" class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h1 class="kt-subheader__title">Doctor</h1>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="{{ route('admin.dashboard') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Doctor </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Add Doctor </a>


                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>

    </div>
</div>



<form style="margin-left: 80px;" class="kt-form" Method="POST" action="create-doctor" enctype="multipart/form-data">
    @csrf
    <div class="kt-portlet__body">
        <div class="form-group form-group-last">
            <div class="alert alert-secondary" role="alert">
                <div style="display: flex ;">
<h3 style="color: black; font-size: 30px;">Add Doctor</h3>
<a href="{{ route('admin.doctor-list') }}"><button style="margin-left: 300px ;" type="button" class="btn btn-primary btn-wide">View Doctor</button></a>

                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="name" name="doc_name" class="form-control" aria-describedby="emailHelp" placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input type="text" name="doc_description" class="form-control" id="exampleInputPassword1" placeholder="description">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Phone No.</label>
            <input type="text" name="doc_phone" class="form-control" id="exampleInputPassword1" placeholder="number">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="text" name="doc_email" class="form-control" id="exampleInputPassword1" placeholder="em@il">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Doctor Fee</label>
            <input type="text" name="doc_fee" class="form-control" id="exampleInputPassword1" placeholder="fee">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" name="doc_address" class="form-control" id="exampleInputPassword1" placeholder="address">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Available Slot</label>
            <input type="text" name="doc_slot" class="form-control" id="exampleInputPassword1" placeholder="slot">
        </div>

        <div class="form-group">
            <label for="exampleSelect1">Status</label>
            <select class="form-control" id="exampleSelect1" name="doc_status">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
        </div>

        <!-- <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <input type="number" name="product_price" class="form-control" id="exampleInputPassword1" placeholder="Price">
        </div> -->

        <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="file" name="doc_image" class="form-control" id="exampleInputPassword1">
        </div>


        <!-- <div class="form-group">
            <label>Quantity</label>
            <input type="number" name="quantity" class="form-control" aria-describedby="emailHelp" placeholder="name">
        </div> -->
        <!-- <div class="form-group">
            <label for="exampleSelect1">Discount</label>
            <select class="form-control" id="exampleSelect1" name="">
                <option value="1"></option>
                <option value="1"></option>
            </select>
        </div> -->
        <!-- <div class="form-group">
            <label>File Browser</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div> -->
    </div>
    <div class="kt-portlet__foot">
        <div class="kt-form__actions">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </div>
</form>

@endsection
