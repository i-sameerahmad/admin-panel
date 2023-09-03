@extends('layouts/main')

@section('title', "about-page")

@section('contents')

<div style="margin-left: 40px ; height: 80px;" class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h1 class="kt-subheader__title">Orders</h1>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Edit status </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                {{-- <a href="" class="kt-subheader__breadcrumbs-link">
                    Edit Pets </a> --}}


                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>

    </div>
</div>


<form style="margin-left: 80px;" class="kt-form" Method="POST" action="../update-order/{{ $order->id }}" enctype="multipart/form-data">
    @csrf
    <div class="kt-portlet__body">
        <div class="form-group form-group-last">
            <div class="alert alert-secondary" role="alert">
                <div style="display: flex ;">
<h3 style="color: black; font-size: 30px;">Edit Order status</h3>
{{-- <a href=""><button style="margin-left: 300px ;" type="button" class="btn btn-primary btn-wide">View Pets</button></a> --}}

                </div>
            </div>
        </div>


        {{-- <div class="form-group">
            <label for="exampleSelect1">Status</label>
            <select class="form-control" id="exampleSelect1" name="product_status">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
        </div> --}}

        <div class="form-group">
            <label for="exampleSelect1">Status</label>
            <select class="form-control" id="exampleSelect1" name="status">
                <option value="Pending">Pending</option>
                <option value="Processing">Processing</option>
                <option value="Shipped">Shipped</option>
                <option value="Delivered">Delivered</option>

            </select>
        </div>

        {{-- <div class="form-group">
            <label>Quantity</label>
            <input type="number" name="quantity" class="form-control" aria-describedby="emailHelp" placeholder="quantity">
        </div> --}}
<!-- <h3>Product Attributes</h3> -->
<!-- <button type="button" class="btn btn-dark" onclick="add_more()">+</button> -->
{{-- <div id="attribute_form_1">

<div style="display:flex; padding-top: 15px; justify-content: space-around;">




    </div>

</div> --}}
        {{-- <div class="form-group">
            <label for="exampleSelect1">Discount</label>
            <select class="form-control" id="exampleSelect1" name="discount_id">
                @forelse($coupans as $key=>$coupan)
                <option value="{{$coupan->id}}">{{$coupan->discount_name}}</option>

        @empty
            No Data Found
        @endforelse

            </select>
        </div> --}}
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

