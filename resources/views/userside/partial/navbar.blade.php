

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/tooplate-main.css">
    <link rel="stylesheet" href="/assets/css/owl.css">
    <link rel="stylesheet" href="/assets/css/flex-slider.css">
<style>

.logo{
  width: 160px;
  height: 50px;
margin-left: 80px;
margin-top: 10px;

}
  .img{
    width: 160px;
  height: 50px;
  }
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
.search{
  display: flex;
  margin-left: 250px;
}
.search-bar{
  width: 400px;
  height: 40px;
  display: flex;
  flex-direction: row;
  margin-left: 330px;
}
::placeholder{
  text-align: center;
}
.search-button{
  border-radius: 50px;
  margin-left: -40px;
}
</style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="logo">
<img class="img" src="//assets/images/log1.png" alt="">
      </div>
<form action="{{ route('user.search') }}" enctype="multipart/form-data" method="get">
  @csrf
      <div class="input-group search-bar">
        <div class="form-outline">
          <input style="width: 300px; height:40px;" name="query" type="search" placeholder="Search..." class="form-control" />
        </div>
        <button type="button" class="btn btn-primary">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </form>
      <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/images/header-logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <a href="cartview"> <i style="color: black; margin-right:15px;" class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i> </a>

<div style="margin-right: 20px;" class="nav-item dropdown">
  <li class="nav-link"> <i class="fa fa-user fa-2x" aria-hidden="true"></i> </li>
  <div class="dropdown-content">
    <a href="{{route('user.profile')}}">Edit Profile</a>
    <a href="{{route('user.logout')}}">Logout</a>

  </div>
</div>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('user.dashboard') }}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.product') }}">Products</a>
            </li>

<div class="nav-item dropdown">
  <li class="nav-link">Categories</li>
  <div class="dropdown-content">
    @forelse($categories as $key=>$category)
    {{-- <a href="category/{{ $category->id }}">{{ $category->category_name }} </a> --}}
    <a href="{{ route('user.category',$category->id) }}">{{ $category->category_name }} </a>

    @empty
    no data found
    @endforelse
  </div>
</div>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.About') }}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.Contact') }}">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

</body>
</html>





