@extends('layouts/main')

@section('title', "about-page")

@section('contents')

<div style="margin-left: 40px ; height: 80px;" class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h1 class="kt-subheader__title">Users</h1>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="{{ route('admin.dashboard') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Booking </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Booking List</a>


                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>

    </div>
</div>

<div class="alert alert-secondary" role="alert">
    <div style="display: flex ;">
<h3 style="color: black; margin-left: 30px ;  font-size: 30px;">Users</h3>
<a href="{{ route('admin.add-verified-pets') }}"><button style="margin-left: 400px ;" type="button" class="btn btn-primary btn-wide"><i class="fa fa-plus"></i>  Add </button></a>

    </div>
</div>

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Users Record
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>User Type</th>
                        <th>Email</th>


                    </tr>
                </thead>
                 <tbody>
                    @forelse($users as $key=>$users)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->user_type }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->id }}</td>
                         <td nowrap>
                            <a href="approve/{{ $users->id }}"><button type="button" class="btn btn-accent btn-icon"><i class="fa fa-check"></i></button></a>&nbsp;
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
