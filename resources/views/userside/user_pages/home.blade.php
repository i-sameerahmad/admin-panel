@extends('userside.layouts.master')

@section('content')

<style>
    .product-img{
        width: 200px;
        height: 150px;
    }
    .display{
      display: inline;
    }
    .contain{
width: 100%;
display:grid;
grid-template-columns: repeat(3,1fr);
grid-row: auto auto auto auto;
margin-top: 100px;

}
.box{
  margin-left: auto;
  margin-right: auto;
  margin-top: 30px;
}
.margin{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
</style>

     <!-- Banner Starts Here -->
     <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caption">
              <h2>BUY YOU WANT!</h2>
              <div class="line-dec"></div>
              `<p>. Total <strong>5 pages</strong> included. You can use this Bootstrap v4.1.3 layout for any CMS. </p>`
              <div class="main-button">
                <a href="#">Order Now!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Items</h1>
            </div>
          </div>
          <div class="col-md-8 col-sm-12">
            {{-- <div id="filters" class="button-group">
              <label for="categories">Categories</label>

                <select name="categories" id="cars">
                    @forelse ($categories as $key=>$category )
                    <option value="volvo">{{$category->category_name}}</option>
                    @empty
                    no data found
                    @endforelse
                </select>

            </div> --}}
          </div>
        </div>
      </div>
    </div>
  
    <div class="contain">
@forelse($products as $key=>$product)
        
            <div id="1" class="box">
              <a href="product-details/{{ $product->id }}">
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
{{-- dd({{ $products->links() }}); --}}

        </div>
    </div>
    <div style="padding-left:650px; padding-top:40px;">
      {{ $products->links() }}
    </div>
    @endsection