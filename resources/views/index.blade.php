@extends('layout/home')

@section('title', 'SALEgiShop')

@section('container')

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.container {
  position: relative;
}

.topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 80px;
}
</style>
</head>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-teal w3-wide w3-padding w3-card">
    <a href="#" class="w3-bar-item w3-button"><b>SALEgiShop</b></a>
  </div>
</div>
<br><br><br>

<div class="container"><br><br><br>
    <h1 class = "mt-3">Welcome To SALEgiShop</h1><br>
    <p>SALEgiShop is an online shop that provides attractive 
        <br>fashion products and of course very trendy for all people.</p><br><br>     
    <a href="menu" type="submit" class="btn btn-dark">Kunjungi</a>
    <div class="topright">
        <img class="d-block w-200" src="{{('images/hyung.png')}}" alt="First slide" style="width: 100%">
    </div>
</div>

@endsection
