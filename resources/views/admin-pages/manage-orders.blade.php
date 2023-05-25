@extends('layouts/main')

@section('title', "about-page")

@section('contents')


<div style="margin-left: 40px ; height: 80px;" class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h1 class="kt-subheader__title">Orders</h1>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="{{ route('admin.dashboard') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Orders </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Manage Order</a>


                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>

    </div>
</div>





<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Basic Example
            </h3>
        </div>

    </div>
    <div class="kt-portlet__body">

        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
            <thead>
                <tr>
                    <th>Sr no.</th>
                    <th>Customer name</th>
                    <th>Order ID</th>
                    <th>Bill</th>
                    <th>Ship Address</th>
                    <th>Payment</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>61715-075</td>
                    <td>China</td>
                    <td>Tieba</td>
                    <td>746 Pine View Junction</td>

                    <td>2/12/2018</td>
                    <td>
                        <span class="badge badge-pill badge-primary">Primary</span>


                    </td>
                    <td nowrap>
                        <button type="button" class="btn btn-accent btn-icon"><i class="fa fa-pen"></i></button>&nbsp;
                        <button type="button" class="btn btn-danger btn-icon"><i class="fa fa-trash"></i></button>&nbsp;</td>
                </tr>
           </tbody>
        </table>

        <!--end: Datatable -->
    </div>
</div>


@endsection
