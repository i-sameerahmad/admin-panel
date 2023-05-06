@extends('layouts/main')

@section('title', "about-page")

@section('contents')

<div style="margin-left: 40px ; height: 80px;" class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h1 class="kt-subheader__title">Product</h1>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Products </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Product List</a>


                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>

    </div>
</div>

<div class="alert alert-secondary" role="alert">
    <div style="display: flex ;">
<h3 style="color: black; margin-left: 30px ;  font-size: 30px;">Products</h3>
<a href="add-product"><button style="margin-left: 400px ;" type="button" class="btn btn-primary btn-wide"><i class="fa fa-plus"></i>  Add Product</button></a>

    </div>
</div>

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Product Record
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Inventory/Stock</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $key=>$product)
    {{-- {{$product->quantity}} --}}
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->product_price }}</td>
                        <td>{{ $product->product_description }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                        <span class="badge badge-pill badge-primary">{{ $product->product_status }}</span>
                        </td>
                        <td nowrap>
                            <a href="edit-product/{{ $product->id }}"><button type="button" class="btn btn-accent btn-icon"><i class="fa fa-pen"></i></button></a>&nbsp;
                            <a href="delete-product/{{ $product->id }}"><button type="button" class="btn btn-danger btn-icon"><i class="fa fa-trash"></i></button></a>&nbsp;</td>

                        </td>
                    </tr>

            @empty
                No Data Found
            @endforelse


                    </tbody>

            </table>

            <!--end: Datatable -->
        </div>
    </div>

</div>

@endsection
