@extends('layout/home')

@section('title', 'Tampilan')

@section('container')

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-teal w3-wide w3-padding w3-card">
    <a href="/menu" class="w3-bar-item w3-button"><b>SALEgiShop</b></a>
    <div class="w3-right w3-hide-small">
      <a href="/menu" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div>
<br><br><br>

<header>
  <h1>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    Hi Admin,</h1>
  <h1>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    This Is Dashboard</h1><br><br>
</header>

<div class="row text-center">
    <div class="col-sm-5"><center>
      <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
        <div class="card-body">
          <h5 class="card-title">Category</h5>
          <a href="{{ url('/categorys')}}" class="btn btn-info">Show</a>
        </div>
      </div>
    </div></center>
    <div class="col-sm-5"><center>
      <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
        <div class="card-body">
          <h5 class="card-title">Orders</h5>
          <a href="{{ url('/orders')}}" class="btn btn-info">Show</a>
        </div>
      </div>
    </div></center>
</div>
<div class="row text-center">
  <div class="col-sm-5"><center>
      <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
        <div class="card-body">
          <h5 class="card-title">Order Track History</h5>
          <a href="{{ url('/ordertrackhistorys')}}" class="btn btn-info">Show</a>
        </div>
      </div>
    </div></center>
  <div class="col-sm-5"><center>
      <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
        <div class="card-body">
          <h5 class="card-title">Product Review</h5>
          <a href="{{ url('/productreviews')}}" class="btn btn-info">Show</a>
        </div>
      </div>
    </div></center>
</div>
<div class="row text-center">
  <div class="col-sm-5"><center>
      <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
        <div class="card-body">
          <h5 class="card-title">Products</h5>
          <a href="{{ url('/products')}}" class="btn btn-info">Show</a>
        </div>
      </div>
    </div></center>
  <div class="col-sm-5"><center>
      <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
        <div class="card-body">
          <h5 class="card-title">Sub Category</h5>
          <a href="{{ url('/subcategorys')}}" class="btn btn-info">Show</a>
        </div>
      </div>
    </div></center>
</div>
<div class="row text-center">
  <div class="col-sm-5"><center>
      <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
        <div class="card-body">
          <h5 class="card-title">Userlog</h5>
          <a href="{{ url('/userlogs')}}" class="btn btn-info">Show</a>
        </div>
      </div>
    </div></center>
  <div class="col-sm-5"><center>
      <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
        <div class="card-body">
          <h5 class="card-title">Wishlist</h5>
          <a href="{{ url('/wishlists')}}" class="btn btn-info">Show</a>
        </div>
      </div>
    </div></center>
</div>
<div class="row text-center">
  <div class="col-sm-5"><center>
      <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
        <div class="card-body">
          <h5 class="card-title">Admin</h5>
          <a href="{{ url('/admins')}}" class="btn btn-info">Show</a>
        </div>
      </div>
    </div></center>
  <div class="col-sm-5"><center>
      <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
        <div class="card-body">
          <h5 class="card-title">Users</h5>
          <a href="{{ url('/users')}}" class="btn btn-info">Show</a>
        </div>
      </div>
    </div></center>
</div><br><br><br>
@endsection