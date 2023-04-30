@extends('userside.layouts.master')

@section('content')

 <!-- Page Content -->
    <!-- Single Starts Here -->
    <div class="single-product">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Single Product</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="">
              <div style="width: 400px; height:350px; "  class="">
                <img style="width: 360px; height:310px; " src="{{$product[0]->product_image}}"/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4> {{$product[0]->product_name}} </h4>
              <h6> ${{$product[0]->product_price}} </h6>
              <p> {{$product[0]->product_description}} </p>
              <form action="../add-to-cart/{{ $product[0]->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="quantity">Quantity:</label>
                <input name="quantity" type="quantity" class="quantity-text" id="quantity" 
                	onfocus="if(this.value == '1') { this.value = ''; }" 
                    onBlur="if(this.value == '') { this.value = '1';}"
                    value="1">
              {{-- <input type="submit" class="button" value="Order Now!"> --}}
              <button type="submit">add to cart</button>
              </form>
{{-- <a href="../add-to-cart/{{ $product[0]->id }}"><button type="submit">add to cart</button></a> --}}
              <div class="down-content">
                <div class="categories">
                  <h6>Category: <span><a href="#">{{$product[0]->Category->category_name}}</a></span></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Single Page Ends Here -->

@endsection