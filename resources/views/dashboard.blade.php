@extends('layout/home')

@section('title', 'Tampilan')

@section('container')

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .container3 {
  width: 100%;
  padding: 50px;
  margin: 50px auto;
  display: flex;
  flex-direction: row;
  justify-content: center;
}
.box {
  width: 250px;
  height: 150px;
  margin: 0px 20px 50px 0px;
  background: #009789;
  border-radius: 50px;
}
.box:hover {
  transform: scale(1.5);
  z-index: 2;
  align-items: center;
}
</style>
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

<header><center>
  <h1><br>Hi Admin,</h1>
  <h1>This Is Dashboard</h1><br><br></center>
</header>

<div class="container3 row pt-lg-4 w3-center">
  <div class="box">
    <br><br><h4>Category<br></h4>
    <a href="{{ url('/categorys')}}" class="btn btn-dark">Show</a>
  </div>
  <div class="box">
    <br><br><h4>Order<br></h4>
    <a href="{{ url('/orders')}}" class="btn btn-dark">Show</a>
  </div>
  <div class="box">
    <br><br><h4>Order Track History<br></h4>
    <a href="{{ url('/ordertrackhistorys')}}" class="btn btn-dark">Show</a>
  </div>
  <div class="box">
    <br><br><h4>Product Review<br></h4>
    <a href="{{ url('/productreviews')}}" class="btn btn-dark">Show</a>
  </div>
  <div class="box">
    <br><br><h4>Products<br></h4>
    <a href="{{ url('/products')}}" class="btn btn-dark">Show</a>
  </div>
  <div class="box">
    <br><br><h4>Sub Category<br></h4>
    <a href="{{ url('/subcategorys')}}" class="btn btn-dark">Show</a>
  </div><div class="box">
    <br><br><h4>Userlog<br></h4>
    <a href="{{ url('/userlogs')}}" class="btn btn-dark">Show</a>
  </div>
  <div class="box">
    <br><br><h4>Wishlist<br></h4>
    <a href="{{ url('/wishlists')}}" class="btn btn-dark">Show</a>
  </div>
  <div class="box">
    <br><br><h4>Admin<br></h4>
    <a href="{{ url('/admins')}}" class="btn btn-dark">Show</a>
  </div>
  <div class="box">
    <br><br><h4>Users<br></h4>
    <a href="{{ url('/users')}}" class="btn btn-dark">Show</a>
  </div>
</div>
<br><br>
@endsection