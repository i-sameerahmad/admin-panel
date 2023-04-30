@extends('userside.layouts.master')

@section('content')


<style>
  .product-img{
      width: 200px;
      height: 150px;
  }
  .margin{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

  .box{
  margin-left: auto;
  margin-right: auto;
  margin-top: 30px;
}
  .contain{
width: 100%;
display:grid;
grid-template-columns: repeat(3,1fr);
grid-row: auto auto auto auto;
margin-top: 100px;
}

</style>

<!-- Page Content -->
    <!-- Items Starts Here -->
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Items</h1>
            </div>
          </div>
        
        </div>
      </div>
    </div>
  
    <div class="contain">
@forelse($products as $key=>$product)
        
            <div id="1" class="box">
              <a href="../user/product-details/{{ $product->id }}">
                <div class="featured-item">
                  <img style="height: 250px; width:300px;" src="{{ $product->product_image }}" alt="">
                <div class="margin">
                  <h4>{{ $product->product_name }}</h4>
                  <h6>Rs {{ $product->product_price }}</h6>
                </div>
                </div>
              </a>
            </div>
        @empty
        @endforelse    


        </div>
    </div>

    <!-- Featred Page Ends Here -->

@endsection

    