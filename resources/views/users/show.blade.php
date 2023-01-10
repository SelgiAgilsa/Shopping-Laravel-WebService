@extends('layout/home')

@section('title', 'User')

@section('container')

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-teal w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>SALEgiShop</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="/dashboard" class="w3-bar-item w3-button">Dashboard</a>
    </div>
  </div>
</div>
<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail User</h3>
            
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$adusers->name}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$adusers->email}}</h6>
                  <p class="card-text">Contact No     : {{$adusers->contactno}}</p>
                  <p class="card-text">Password     : {{$adusers->password}}</p>
                  <p class="card-text">Shipping Address     : {{$adusers->shippingAddress}}</p>   
                  <p class="card-text">Shipping State     : {{$adusers->shippingState}}</p>
                  <p class="card-text">Shipping City     : {{$adusers->shippingCity}}</p>
                  <p class="card-text">Shipping Pincode     : {{$adusers->shippingPincode}}</p> 
                  <p class="card-text">Billing Address     : {{$adusers->billingAddress}}</p>
                  <p class="card-text">Billing State     : {{$adusers->billingState}}</p>
                  <p class="card-text">Billing City     : {{$adusers->billingCity}}</p> 
                  <p class="card-text">Billing Pincode     : {{$adusers->billingPincode}}</p>
                  <p class="card-text">Reg Date     : {{$adusers->regDate}}</p>
                  <p class="card-text">Updation Date     : {{$adusers->updationDate}}</p>  
                                

                  <a href="{{ $adusers->id }}/edit">Edit</a>
                  <form action="/users/{{ $adusers->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/users">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection












