@extends('layout/home')

@section('title', 'Orders')

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
            <h3 class = "mt-3">Detail Orders</h3>
            
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$adorders->user_id}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$adorders->product_id}}</h6>
                  <p class="card-text">quantity     : {{$adorders->quantity}}</p>
                  <p class="card-text">order_date     : {{$adorders->order_date}}</p>
                  <p class="card-text">payment_method     : {{$adorders->payment_method}}</p>
                  <p class="card-text">order_status     : {{$adorders->order_status}}</p>                  

                  <a href="{{ $adorders->id }}/edit">Edit</a>
                  <form action="/orders/{{ $adorders->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/orders">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection












