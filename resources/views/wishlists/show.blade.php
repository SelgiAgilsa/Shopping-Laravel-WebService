@extends('layout/home')

@section('title', 'Wishlists')

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
            <h3 class = "mt-3">Detail Wishlists</h3>
            
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$adwishlists->user_id}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$adwishlists->product_id}}</h6>
                  <p class="card-text">posting_date     : {{$adwishlists->posting_date}}</p>
                  

                  <a href="{{ $adwishlists->id }}/edit">Edit</a>
                  <form action="/wishlists/{{ $adwishlists->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/wishlists">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
