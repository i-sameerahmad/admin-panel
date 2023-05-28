@extends('layouts/main')

@section('title', "about-page")

@section('contents')

<div style="margin-left: 40px ; height: 80px;" class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h1 class="kt-subheader__title">Product</h1>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="{{ route('admin.dashboard') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Products </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Add Product </a>


                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>

    </div>
</div>



<form style="margin-left: 80px;" class="kt-form" Method="POST" action="../update-doctor/{{ $doctor->id }}" enctype="multipart/form-data">
    @csrf
    <div class="kt-portlet__body">
        <div class="form-group form-group-last">
            <div class="alert alert-secondary" role="alert">
                <div style="display: flex ;">
<h3 style="color: black; font-size: 30px;">Edit Doctor</h3>
<a href="{{route('admin.doctor-list')}}"><button style="margin-left: 300px ;" type="button" class="btn btn-primary btn-wide">View Products</button></a>

                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="name" value="{{ $doctor->doc_name }}" name="doc_name" class="form-control" aria-describedby="emailHelp" placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input type="text" name="doc_description" value="{{ $doctor->doc_description }}" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input type="text" name="doc_phone" value="{{ $doctor->doc_phone }}" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="text" name="doc_email" value="{{ $doctor->doc_email }}" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Fee</label>
            <input type="text" name="doc_fee" value="{{ $doctor->doc_fee }}" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" name="doc_address" value="{{ $doctor->doc_address }}" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Available Slot</label>
            <input type="text" name="doc_slot" value="{{ $doctor->doc_slot }}" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>

        <div class="form-group">
            <label for="exampleSelect1">Status</label>
            <select class="form-control" id="exampleSelect1" name="doc_status">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="file" name="doc_image" class="form-control" id="exampleInputPassword1">
        </div>

<!-- <h3>Product Attributes</h3> -->
<!-- <button type="button" class="btn btn-dark" onclick="add_more()">+</button> -->



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
<!--
<script>

    var count = 1;
function add_more(){
    count++;
    var html = '<div id="attribute_form_'+count+'"><div style="display:flex; padding-top: 15px; justify-content: space-around;">';

var size_id_html= jQuery('#size_id').html();
html+= '<div class="form-group"> <label for="exampleSelect1">Size</label><select class="form-control" id="size_id" name="size_id[]"> '+size_id_html+' </select></div>';

var color_id_html= jQuery('#color_id').html();
html+= '<div class="form-group"> <label for="exampleSelect1">Color</label><select class="form-control" id="color_id" name="color_id[]"> '+color_id_html+' </select></div>';
html+= ' <div class="form-group"><label>Quantity</label><input type="number" name="quantity[]" class="form-control" aria-describedby="emailHelp" placeholder="quantity"></div>';
html+= ' <div class="form-group"><button type="button" class="btn btn-danger" onclick=remove_more("'+count+'")>-</button></div>';



html += '</div></div>';
    jQuery('#attribute_form_1').append(html)
}

function remove_more(count){
    jQuery('#attribute_form_'+count).remove();

}
</script> -->

@endsection
