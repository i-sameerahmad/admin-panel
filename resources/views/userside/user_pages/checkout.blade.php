@extends('userside.layouts.master')

@section('content')

<style>
.style{
margin-top:100px;
}
.box{
    height:100px;
    padding: 25px;
    background-color: #3a8bcd;;
}
</style>

<div class="style">

<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Checkout<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="checkout">
            <div style="height: 600px;" class="container">
                
                <form action="{{ route('user.create-order') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Full Name *</label>
                                        <input type="text" value="{{ $profile[0]->User->name }}" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->

                                    
                                </div><!-- End .row -->


                                <label>City</label>
                                <input type="text" value="{{ $profile[0]->city }}" class="form-control" required>

                                <label> Address</label>
                                <input type="text" value="{{ $profile[0]->address }}" class="form-control" placeholder="House number and Street name" required>

                                    <div class="col-sm-6">
                                        <label>State / Country *</label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Postcode / ZIP *</label>
                                        <input type="text" value="{{ $profile[0]->postal_code }}" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>Phone *</label>
                                        <input type="text" value="{{ $profile[0]->Phone }}" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <label>Email address *</label>
                                <input type="email" value="{{ $profile[0]->User->email }}" class="form-control" required>

                              
                               </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-3">
                            <div class="summary">
                                <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                                <table class="table table-summary">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($cartitems as $key=>$cartitem )
                                            
                                       
                                        <tr>
                                            <td>{{ $cartitem->name }}({{ $cartitem->quantity }})</td>
                                            <td>{{ $cartitem->price }}</td>

                                        </tr>
                                        @empty
                                            
                                        @endforelse
                                        <tr class="summary-subtotal">
                                            <td>Subtotal:</td>
                                            <td>Rs {{ \Cart::session(auth()->id())->getTotal()}}</td>
                                        </tr><!-- End .summary-subtotal -->
                                        <tr>
                                            <td>Shipping:</td>
                                            <td>Free shipping</td>
                                        </tr>
                                        <tr class="summary-total">
                                            <td>Total:</td>
                                            <td>Rs {{ \Cart::session(auth()->id())->getTotal()}}</td>

                                        </tr><!-- End .summary-total -->
                                    </tbody>
                                </table><!-- End .table table-summary -->

                                <div class="accordion-summary" id="accordion-payment">
                                    
                                    <div class="card">
                                        <div class="card-header" id="heading-3">
                                            <h2 class="card-title">
                                                <label class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                    Cash on delivery
                                                </label>
                                            </h2>
                                        </div><!-- End .card-header -->
                                       
                                   
                               <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                    <span class="btn-hover-text">Proceed to Checkout</span>
                                </button>
                            </div><!-- End .summary -->
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </form>
            </div><!-- End .container -->
        </div><!-- End .checkout -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
</div>

<script>

$(document).on('submit', '.button', function (e) {
    e.preventDefault();
    Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
},
        function() {
            $.ajax({
                type: "POST",
                url: "{{ route('user.create-order') }}",
                success: function (data) {
                              //
                    }         
            });
    });
});
</script>


@endsection