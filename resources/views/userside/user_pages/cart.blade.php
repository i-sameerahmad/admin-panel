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

    {{-- {{ dd(\Cart::session(auth()->id())->getContent()) }} --}}
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container box">
            <h1 style="color: white;" class="page-title">Shopping Cart<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="cart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <table class="table table-cart table-mobile">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($cartitems as $key=>$cartitem)
                               
                                <tr>
                                    <td class="product-col">
                                        <div class="product">
                                            {{-- <figure class="product-media">
                                                <a href="">
                                                    <img style="height: 50px; width:50px;" src="{{ $cartitem->image }}" alt="Product image">
                                                </a>
                                            </figure> --}}

                                            <h3 class="product-title">
                                                <a href="">{{ $cartitem->name }}</a>
                                            </h3><!-- End .product-title -->
                                        </div><!-- End .product -->
                                    </td>
                                    <td class="price-col">Rs {{ $cartitem->price }}</td>
                                    <td class="quantity-col">
                                        <div class="cart-product-quantity">
                                            <input type="number" class="form-control" value="{{ $cartitem->quantity }}" min="1" max="10" step="1" data-decimals="0" required>
                                        </div><!-- End .cart-product-quantity -->
                                    </td>
                                    {{-- <td class="total-col">Rs {{ $cartitem->price * $cartitem->quantity }}</td> --}}
                                    <td class="total-col">Rs {{ Cart::session(auth()->id())->get($cartitem->id)->getPriceSum()}}</td>

                                    <td class="remove-col"><a href="item-delete/{{ $cartitem->id }}"><button class="btn-remove"><i class="icon-close"></i></button></a></td>
                                </tr>
                                    
                                @empty
                                    
                                @endforelse 
                            </tbody>
                        </table><!-- End .table table-wishlist -->

                      </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3">
                        <div class="summary summary-cart">
                            <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                            <table class="table table-summary">
                                <tbody>
                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td>Rs {{ \Cart::session(auth()->id())->getTotal()}}</td>
                                    </tr><!-- End .summary-subtotal -->


                                    <tr class="summary-shipping-estimate">
                                        <td>Estimate for Your Country<br> <a href="dashboard.html">Change address</a></td>
                                        <td>&nbsp;</td>
                                    </tr><!-- End .summary-shipping-estimate -->

                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td>Rs {{ \Cart::session(auth()->id())->getTotal()}}</td>
                                    </tr><!-- End .summary-total -->
                                </tbody>
                            </table><!-- End .table table-summary -->

                            <a href="{{ route('user.product-checkout') }}" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
                        </div><!-- End .summary -->

                        <a href="{{ route('user.dashboard') }}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cart -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
</div>
@endsection