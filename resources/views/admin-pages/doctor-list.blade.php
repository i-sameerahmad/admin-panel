@extends('layouts/main')

@section('title', "about-page")

@section('contents')

<div style="margin-left: 40px ; height: 80px;" class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h1 class="kt-subheader__title">Doctor</h1>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Doctor </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Doctor List</a>


                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>

    </div>
</div>

<div class="alert alert-secondary" role="alert">
    <div style="display: flex ;">
<h3 style="color: black; margin-left: 30px ;  font-size: 30px;">Doctor</h3>
<a href="category-list"><button style="margin-left: 400px ;" type="button" class="btn btn-primary btn-wide"><i class="fa fa-plus"></i>  Add Doctor</button></a>

    </div>
</div>

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Doctor Record
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
                        <th>Description</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address ID</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($doctors as $key=>$doctor)

                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $doctor->doc_name }}</td>
                        <td>{{ $doctor->doc_description }}</td>
                        <td>{{ $doctor->doc_phone }}</td>
                        <td>{{ $doctor->doc_email }}</td>
                        <td>{{ $doctor->doc_address }}</td>
                        <td>
                            <span class="badge badge-pill badge-primary">{{ $doctor->doc_status }}</span>
                            </td>
                        {{-- <td>
                        <span class="badge badge-pill badge-primary">Primary</span>

                    </td> --}}
                        <td nowrap>
                            <a href="edit-doctor/{{ $doctor->id }}"><button type="button" class="btn btn-accent btn-icon"><i class="fa fa-pen"></i></button></a>&nbsp;
                            <a href="delete-doctor/{{ $doctor->id }}"><button type="button" class="btn btn-danger btn-icon"><i class="fa fa-trash"></i></button></a>&nbsp;</td>

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
