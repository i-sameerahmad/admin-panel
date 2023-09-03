@extends('layouts/main')

@section('title', "about-page")

@section('contents')

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <!--begin::Dashboard 1-->

    <!--begin::Row-->
    <div class="row">
        <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head kt-portlet__head--noborder">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">Sales</h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-toolbar-wrapper">
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-more-1"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="kt-nav">
                                        <li class="kt-nav__section kt-nav__section--first">
                                            <span class="kt-nav__section-text">Export Tools</span>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-print"></i>
                                                <span class="kt-nav__link-text">Print</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                <span class="kt-nav__link-text">CSV</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                <span class="kt-nav__link-text">PDF</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fluid">
                    <div class="kt-widget-19">
                        <div class="kt-widget-19__title">
                            <div class="kt-widget-19__label"><small></small>Rs {{ $totalSum }}</div>
                            <img class="kt-widget-19__bg" src="assets/media/misc/iconbox_bg.png" alt="bg" />
                        </div>
                        <div class="kt-widget-19__data">

                            <!--Doc: For the chart bars you can use state helper classes: kt-bg-success, kt-bg-info, kt-bg-danger. Refer: components/custom/colors.html -->
                            <div class="kt-widget-19__chart">
                                <div class="kt-widget-19__bar">
                                    <div class="kt-widget-19__bar-45" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="45"></div>
                                </div>
                                <div class="kt-widget-19__bar">
                                    <div class="kt-widget-19__bar-95" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="95"></div>
                                </div>
                                <div class="kt-widget-19__bar">
                                    <div class="kt-widget-19__bar-63" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="63"></div>
                                </div>
                                <div class="kt-widget-19__bar">
                                    <div class="kt-widget-19__bar-11" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="11"></div>
                                </div>
                                <div class="kt-widget-19__bar">
                                    <div class="kt-widget-19__bar-46" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="46"></div>
                                </div>
                                <div class="kt-widget-19__bar">
                                    <div class="kt-widget-19__bar-88" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="88"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end::Portlet-->
        </div>

        <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head  kt-portlet__head--noborder">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">Total Orders</h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-toolbar-wrapper">
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-more-1"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="kt-nav">
                                        <li class="kt-nav__section kt-nav__section--first">
                                            <span class="kt-nav__section-text">Export Tools</span>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-print"></i>
                                                <span class="kt-nav__link-text">Print</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                <span class="kt-nav__link-text">CSV</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                <span class="kt-nav__link-text">PDF</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fluid">
                    <div class="kt-widget-20">
                        <div class="kt-widget-20__title">
                            <div class="kt-widget-20__label">{{$numOrders}}</div>
                            <img class="kt-widget-20__bg" src="assets/media/misc/iconbox_bg.png" alt="bg" />
                        </div>
                        <div class="kt-widget-20__data">
                            <div class="kt-widget-20__chart">

                                <!--Doc: For the chart initialization refer to "widgetTotalOrdersChart" function in "src\theme\app\scripts\custom\dashboard.js" -->
                                <canvas id="kt_widget_total_orders_chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end::Portlet-->
        </div>
        <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--height-fluid kt-widget ">
                <div class="kt-portlet__body">
                    <div id="kt-widget-slider-13-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                        <div class="kt-slider__head">
                            <div class="kt-slider__label">Announcements</div>
                            <div class="kt-slider__nav">
                                <a class="kt-slider__nav-prev carousel-control-prev" href="#kt-widget-slider-13-1" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="kt-slider__nav-next carousel-control-next" href="#kt-widget-slider-13-1" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active kt-slider__body">
                                <div class="kt-widget-13">
                                    <div class="kt-widget-13__body">
                                        <a class="kt-widget-13__title" href="#">Keen Admin Launch Day</a>
                                        <div class="kt-widget-13__desc">
                                            To start a blog, think of a topic about and first brainstorm party is ways to write details
                                        </div>
                                    </div>
                                    <div class="kt-widget-13__foot">
                                        <div class="kt-widget-13__label">
                                            <div class="btn btn-sm btn-label btn-bold">
                                                07 OCT, 2018
                                            </div>
                                        </div>
                                        <div class="kt-widget-13__toolbar">
                                            <a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item kt-slider__body">
                                <div class="kt-widget-13">
                                    <div class="kt-widget-13__body">
                                        <a class="kt-widget-13__title" href="#">Incredibly Positive Reviews</a>
                                        <div class="kt-widget-13__desc">
                                            To start a blog, think of a topic about and first brainstorm party is ways to write details
                                        </div>
                                    </div>
                                    <div class="kt-widget-13__foot">
                                        <div class="kt-widget-13__title">
                                            <div class="btn btn-sm btn-label btn-bold">
                                                17 NOV, 2018
                                            </div>
                                        </div>
                                        <div class="kt-widget-13__toolbar">
                                            <a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item kt-slider__body">
                                <div class="kt-widget-13">
                                    <div class="kt-widget-13__body">
                                        <a class="kt-widget-13__title" href="#">Award Winning Theme</a>
                                        <div class="kt-widget-13__desc">
                                            To start a blog, think of a topic about and first brainstorm party is ways to write details
                                        </div>
                                    </div>
                                    <div class="kt-widget-13__foot">
                                        <div class="kt-widget-13__label">
                                            <div class="btn btn-sm btn-label btn-bold">
                                                03 SEP, 2018
                                            </div>
                                        </div>
                                        <div class="kt-widget-13__toolbar">
                                            <a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end::Portlet-->
        </div>

    </div>

    <!--end::Row-->

    <!--begin::Row-->
    <div class="row">



        <div class="col-lg-12 col-xl-4 order-lg-2 order-xl-1">

            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">Latest Uploads</h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-actions">
                            <a href="#" class="btn btn-default btn-upper btn-sm btn-bold">All FILES</a>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--fluid">
                    <div class="kt-widget-7">
                        <div class="kt-widget-7__items">
                            <div class="kt-widget-7__item">
                                <div class="kt-widget-7__item-pic">
                                    <img src="assets/media/files/doc.svg" alt="" />
                                </div>
                                <div class="kt-widget-7__item-info">
                                    <a href="#" class="kt-widget-7__item-title">
                                        Keeg Design Reqs
                                    </a>
                                    <div class="kt-widget-7__item-desc">
                                        95 MB
                                    </div>
                                </div>
                                <div class="kt-widget-7__item-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__section kt-nav__section--first">
                                                    <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-eye"></i>
                                                        <span class="kt-nav__link-text">View</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-comment-o"></i>
                                                        <span class="kt-nav__link-text">Coments</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-copy"></i>
                                                        <span class="kt-nav__link-text">Copy</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                        <span class="kt-nav__link-text">Excel</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget-7__item">
                                <div class="kt-widget-7__item-pic">
                                    <img src="assets/media/files/pdf.svg" alt="" />
                                </div>
                                <div class="kt-widget-7__item-info">
                                    <a href="#" class="kt-widget-7__item-title">
                                        S.E.R Agreement
                                    </a>
                                    <div class="kt-widget-7__item-desc">
                                        805 MB
                                    </div>
                                </div>
                                <div class="kt-widget-7__item-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__section kt-nav__section--first">
                                                    <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-eye"></i>
                                                        <span class="kt-nav__link-text">View</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-comment-o"></i>
                                                        <span class="kt-nav__link-text">Coments</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-copy"></i>
                                                        <span class="kt-nav__link-text">Copy</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                        <span class="kt-nav__link-text">Excel</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget-7__item">
                                <div class="kt-widget-7__item-pic">
                                    <img src="assets/media/files/jpg.svg" alt="" />
                                </div>
                                <div class="kt-widget-7__item-info">
                                    <a href="#" class="kt-widget-7__item-title">
                                        FlyMore Screenshot
                                    </a>
                                    <div class="kt-widget-7__item-desc">
                                        4 MB
                                    </div>
                                </div>
                                <div class="kt-widget-7__item-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__section kt-nav__section--first">
                                                    <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-eye"></i>
                                                        <span class="kt-nav__link-text">View</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-comment-o"></i>
                                                        <span class="kt-nav__link-text">Coments</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-copy"></i>
                                                        <span class="kt-nav__link-text">Copy</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                        <span class="kt-nav__link-text">Excel</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget-7__item">
                                <div class="kt-widget-7__item-pic">
                                    <img src="assets/media/files/zip.svg" alt="" />
                                </div>
                                <div class="kt-widget-7__item-info">
                                    <a href="#" class="kt-widget-7__item-title">
                                        ST.11 Dacuments
                                    </a>
                                    <div class="kt-widget-7__item-desc">
                                        Unknown
                                    </div>
                                </div>
                                <div class="kt-widget-7__item-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__section kt-nav__section--first">
                                                    <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-eye"></i>
                                                        <span class="kt-nav__link-text">View</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-comment-o"></i>
                                                        <span class="kt-nav__link-text">Coments</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-copy"></i>
                                                        <span class="kt-nav__link-text">Copy</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                        <span class="kt-nav__link-text">Excel</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget-7__item">
                                <div class="kt-widget-7__item-pic">
                                    <img src="assets/media/files/xml.svg" alt="" />
                                </div>
                                <div class="kt-widget-7__item-info">
                                    <a href="#" class="kt-widget-7__item-title">
                                        XML AOL Data Fetchin
                                    </a>
                                    <div class="kt-widget-7__item-desc">
                                        4 MB
                                    </div>
                                </div>
                                <div class="kt-widget-7__item-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__section kt-nav__section--first">
                                                    <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-eye"></i>
                                                        <span class="kt-nav__link-text">View</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-comment-o"></i>
                                                        <span class="kt-nav__link-text">Coments</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-copy"></i>
                                                        <span class="kt-nav__link-text">Copy</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                        <span class="kt-nav__link-text">Excel</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-widget-7__foot">
                            <img src="assets/media/misc/clouds.png" alt="" />
                            <div class="kt-widget-7__upload">
                                <a href="#"><i class="flaticon-upload"></i></a>
                                <span>Drag files here</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end::Portlet-->
        </div>
        <div class="col-lg-12 col-xl-8 order-lg-3 order-xl-1">

            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">Recent Orders <small>32500 total</small></h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper kt-form">
                            <div class="kt-form__group kt-form__group--inline kt-margin-r-10">
                                <div class="kt-form__label">Sort By:</div>
                                <div class="kt-form__control" style="width: 160px;">
                                    <select class="form-control bootstrap-select" id="kt_form_status" title="Status">
                                        <option value="1">Pending</option>
                                        <option value="2">Delivered</option>
                                        <option value="3">Canceled</option>
                                        <option value="4">Success</option>
                                        <option value="5">Info</option>
                                        <option value="6">Danger</option>
                                    </select>
                                </div>
                            </div>
                            <a href="#" class="btn btn-brand btn-upper btn-bold">New Record</a>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fit">

                    <!--Doc: For the datatable initialization refer to "recentOrdersInit" function in "src\theme\app\scripts\custom\dashboard.js" -->
                    <div class="kt-datatable" id="kt_recent_orders"></div>
                </div>
            </div>

            <!--end::Portlet-->
        </div>
    </div>

    <!--end::Row-->

    <!--end::Dashboard 1-->
</div>

@endsection
