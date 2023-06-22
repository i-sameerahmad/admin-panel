<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>





</head>
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">
    <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

					<!-- begin::Aside Brand -->
					<div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
						<div class="kt-aside__brand-logo">
							<a href="index.html">
								{{-- <img alt="Logo" src="assets/images/logo3.png" style="width: 30px; height: 30px; margin-left: 20px;" /> --}}
<h1 style="padding:15px 15px; color:rgb(27, 140, 238);">PetMania</h1>

							</a>
						</div>
						<div class="kt-aside__brand-tools">
							<button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
						</div>
					</div>

					<!-- end:: Aside Brand -->

					<!-- begin:: Aside Menu -->
					<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
						<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
							<ul class="kt-menu__nav ">
								<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--open kt-menu__item--here" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="index" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-graphic"></i><span class="kt-menu__link-text">Dashboards</span></a>
									<div class="kt-menu__submenu ">
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Dashboards</span></span></li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__section ">
									<h4 class="kt-menu__section-text">E-Store</h4>
									<i class="kt-menu__section-icon flaticon-more-v2"></i>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-telegram-logo"></i><span class="kt-menu__link-text">Products</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Products</span></span></li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('admin.product-list') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Product List</span></a>

											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('admin.add-product') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Add Product</span></a>
											</li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-telegram-logo"></i><span class="kt-menu__link-text">Doctors</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Doctors</span></span></li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('admin.doctor-list') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Doctor List</span></a>

											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('admin.addDoctor') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Add Doctor</span></a>
											</li>
										</ul>
									</div>
								</li>


                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-telegram-logo"></i><span class="kt-menu__link-text">Add Varified Pets</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Pets</span></span></li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('admin.pets-list') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Pets List</span></a>

											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('admin.add-verified-pets') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Add Pet</span></a>
											</li>
										</ul>
									</div>
								</li>


								{{-- <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-telegram-logo"></i><span class="kt-menu__link-text">Categories</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('admin.view-category') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Categories List</span></a>

											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('admin.category') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Add Category</span></a>
											</li>
										</ul>
									</div>
								</li> --}}



								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-telegram-logo"></i><span class="kt-menu__link-text">Orders</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="manage-orders" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Manage Orders</span></a>

											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Orders List</span></a>
											</li>
										</ul>
									</div>
								</li>

								<li class="kt-menu__item " aria-haspopup="true"><a href="{{route('admin.manage-ad')}}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-gear"></i><span class="kt-menu__link-text">Manage Ads</span></a></li>


                                {{-- <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-telegram-logo"></i><span class="kt-menu__link-text">Manage Ads</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="manage-orders" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Manage Orders</span></a>

											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Orders List</span></a>
											</li>
										</ul>
									</div>
								</li> --}}



								{{-- <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-telegram-logo"></i><span class="kt-menu__link-text">Coupan</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('admin.coupan-list') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Coupan List</span></a>

											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('admin.add-coupan') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Add Coupan</span></a>
											</li>
										</ul>
									</div>
								</li> --}}



								<li class="kt-menu__section ">
									<h4 class="kt-menu__section-text">Mail</h4>
									<i class="kt-menu__section-icon flaticon-more-v2"></i>
								</li>
								<li class="kt-menu__item " aria-haspopup="true"><a target="_blank" href="https://keenthemes.com/keen/preview/demo1/builder.html" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-gear"></i><span class="kt-menu__link-text">Inbox</span></a></li>


								<li class="kt-menu__section ">
									<h4 class="kt-menu__section-text">Customers</h4>
									<i class="kt-menu__section-icon flaticon-more-v2"></i>
								</li>
								<li class="kt-menu__item " aria-haspopup="true"><a target="_blank" href="customers" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-layers-1"></i><span class="kt-menu__link-text">View Customers</span></a></li>

								<li class="kt-menu__section ">
									<h4 class="kt-menu__section-text">Admin</h4>
									<i class="kt-menu__section-icon flaticon-more-v2"></i>
								</li>
								<li class="kt-menu__item " aria-haspopup="true"><a target="_blank" href="{{ route('admin.logout') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-gear"></i><span class="kt-menu__link-text">Logout</span></a></li>






							</ul>
						</div>
					</div>

					<!-- end:: Aside Menu -->

					<!-- begin:: Aside Footer -->


					<!-- end:: Aside Footer-->
				</div>



            </body>
</html>
