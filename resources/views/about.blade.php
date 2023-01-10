@extends('layout/home')

@section('title', 'About Us')

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
      <a href="/menu" class="w3-bar-item w3-button">Home</a>
    </div>
    <div class="w3-right w3-hide-small">
      <a href="#" class="w3-bar-item w3-button w3-disabled">About Us</a>
    </div>
  </div>
</div>
<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-8">            
            <b><h3 class = "mt-3">About Us !</h3>
            <img class="w3-image" src="images/hyung.png" alt="Architecture" width="900" height="500"></b><br>
            <p>SALEgiShop is an online shop that provides attractive fashion products and of course very trendy for all people.</p>        
            <br>
            <p>Made by <br> Selgi Agilsa E. (20.01.53.0035)</p><br><br><br>
        </div>
    </div>
</div>
@endsection
