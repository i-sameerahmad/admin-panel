@extends('layouts/main')

@section('title', "about-page")

@section('contents')

<div style="margin-left: 40px ; height: 80px;" class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h1 class="kt-subheader__title">Coupan</h1>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Coupans </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Add Coupans </a>
                

                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>
        
    </div>
</div>



<form style="margin-left: 80px;" class="kt-form" method="post" action="storecoupan" enctype="multipart/form-data">
@csrf
    <div class="kt-portlet__body">
        <div class="form-group form-group-last">
            <div class="alert alert-secondary" role="alert">
                <div style="display: flex ;">
<h3 style="color: black; font-size: 30px;">Add Coupan</h3>  
<a href="coupan-list"><button style="margin-left: 300px ;" type="button" class="btn btn-primary btn-wide">View Coupans</button></a>

                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="discount_name" class="form-control" aria-describedby="emailHelp" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input type="text" name="discount_description" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Discount Percentage</label>
            <input type="number" name="discount_percentage" class="form-control" id="exampleInputPassword1" placeholder="percentage">
        </div>

        <div class="form-group">
            <label for="exampleSelect1">Status</label>
            <select class="form-control" id="exampleSelect1" name="status">
               <option value="active">Active</option>
               <option value="inactive">Inactive</option>
               
            </select>
        </div>

        <!-- <div class="form-group">
            <label>File Browser</label>
            <div></div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div> -->
    </div>
    <div class="kt-portlet__foot">
        <div class="kt-form__actions">
            <input type="submit" class="btn btn-primary">
            <!-- <button type="reset" class="btn btn-secondary">Cancel</button> -->
        </div>
    </div>
</form>

@endsection