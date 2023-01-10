@extends('layout/home')

@section('title', 'Form Ubah Orders')

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
        <div class="col-8">            
            <h3 class = "mt-3">Form Ubah Orders</h3>
            
            <form method="post" action="/orders/{{ $adorders->id }}"><br>
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="id" class="form-label">id</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $adorders->id}}">
                    </div>
                    <div class="mb-3">
                        <label for="user_id" class="form-label">user_id</label>
                        <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $adorders->user_id}}">
                    </div>

                    <div class="mb-3">
                        <label for="product_id" class="form-label">product_id</label>
                        <input type="text" class="form-control" id="product_id"  name="product_id" value="{{ $adorders->product_id }}">
                    </div>

                    <div class="mb-3">
                        <label for="quantity" class="form-label">quantity</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" value="{{ $adorders->quantity }}">
                    </div>

                    <div class="mb-3">
                        <label for="order_date" class="form-label">Order Date</label>
                        <input type="text" class="form-control" id="order_date" name="order_date" value="{{ $adorders->order_date }}">
                    </div>
                    <div class="mb-3">
                        <label for="payment_method" class="form-label">payment_method</label>
                        <input type="text" class="form-control" id="payment_method" name="payment_method" value="{{ $adorders->payment_method }}">
                    </div>
                    <div class="mb-3">
                        <label for="order_status" class="form-label">Order Status</label>
                        <input type="text" class="form-control" id="order_status" name="order_status" value="{{ $adorders->order_status }}">
                    </div>

                    
                    
                    <button type="submit">Ubah Data</button>
                    <a href="/orders">Kembali</a><br><br><br><br>
                </form>

        </div>
    </div>
</div>
@endsection











