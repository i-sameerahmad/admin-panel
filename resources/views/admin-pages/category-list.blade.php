@extends('layouts/main')

@section('title', "about-page")

@section('contents')
<div style="margin-left: 40px ; height: 80px;" class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h1 class="kt-subheader__title">Category</h1>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Categories </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Category List</a>


                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>

    </div>
</div>

<div class="alert alert-secondary" role="alert">
    <div style="display: flex ;">
<h3 style="color: black; margin-left: 30px ;  font-size: 30px;">Categories</h3>
<a href="add-category"><button style="margin-left: 400px ;font-size: 16p;" type="button" class="btn btn-primary btn-wide"><i class="fa fa-plus"></i> Add Category</button></a>

    </div>
</div>

<div style="width: 800px;" class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Category Record
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
            <div>
                <thead>
                    <tr>
                        <th>Sr no.</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            </div>

        @forelse($categories as $key=>$category)

        <div>
            <tbody>
                <tr>
                    <td> {{$key+1}} </td>
                    <td> {{$category->category_name}} </td>
                    <td> {{$category->category_description}} </td>
                    <td>
                        <a href="{{route('admin.edit-category',$category->id) }}"> <button type="button" class="btn btn-accent btn-icon"><i class="fa fa-pen"></i></button></a>
                    </td>
                </tr>
            </tbody>
        </div>

        @empty
            No Data Found
        @endforelse

        </table>
           <!--end: Datatable -->
        </div>
    </div>
</div>

@endsection
