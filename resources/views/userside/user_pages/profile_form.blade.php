@extends('userside.layouts.master')
@section('content')

<style>
    .contain{
        padding-top: 100px;
    }
    .formbox{
        height: 450px;
        width: 700px;
    }
</style>
<div class="contain">
<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">My Account<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Account</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    
    <div class="page-content">
        <div class="dashboard">
            <div class="container">
                <div class="row">
                    <aside class="col-md-4 col-lg-3">
                        <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="tab-dashboard-link" data-toggle="tab" href="{{ route('user.dashboard') }}" role="tab" aria-controls="tab-dashboard" aria-selected="true">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-orders-link" data-toggle="tab" href="{{route('user.profile-form')}}" role="tab" aria-controls="tab-orders" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-downloads-link" data-toggle="tab" href="#tab-downloads" role="tab" aria-controls="tab-downloads" aria-selected="false">Downloads</a>
                        </li>
                                               </ul>
                    </aside><!-- End .col-lg-3 -->

                    <div class="col-md-8 col-lg-9">
                       <div class="formbox">
                        <div class="container">
                            <form method="POST" enctype="multipart/form-data" action="{{ route('user.store-profile') }}">
                                @csrf
                              <div class="column">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="first">Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="" id="first">
                                  </div>
                                </div>
                                <!--  col-md-6   -->
                          
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="last">City</label>
                                    <input type="text" name="city" class="form-control" placeholder="" id="last">
                                  </div>
                                </div>
                                <!--  col-md-6   -->
                              </div>
                          
                          
                              <div class="column">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="company">Postal code</label>
                                    <input type="number" name="postal_code" class="form-control" placeholder="" id="company">
                                  </div>
                          
                          
                                </div>
                                <!--  col-md-6   -->
                          
                                <div class="col-md-6">
                          
                                  <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="number" name="phone"  class="form-control" id="phone" placeholder="phone">
                                  </div>
                                </div>
                                <!--  col-md-6   -->
                              </div>
                              <button style="margin-left: 15px;" type="submit" class="btn btn-primary">Submit</button>
                            </form>
                          </div>

                    </div><!-- End .col-lg-9 -->
                </div>
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .dashboard -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
</div>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
@endsection