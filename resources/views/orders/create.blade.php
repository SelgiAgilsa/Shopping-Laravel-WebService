@extends('layout/home')

@section('title', 'Form Tambah Order')

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
            <h3 class = "mt-3">Form Tambah Orders</h3>
            
            <form method="post" action="/orders"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="user_id" class="form-label">user_id</label>
                        <input type="text" class="form-control" id="user_id" placeholder="1" name="user_id" >
                    </div>

                    <div class="mb-3">
                        <label for="product_id" class="form-label">product_id</label>
                        <input type="text" class="form-control" id="product_id" placeholder="1" name="product_id">
                    </div>

                    <div class="mb-3">
                        <label for="quantity" class="form-label">quantity</label>
                        <input type="text" class="form-control" id="quantity" placeholder="123" name="quantity" >
                    </div>

                    <div class="mb-3">
                        <label for="order_date" class="form-label">order_date</label>
                        <input type="text" class="form-control" id="order_date" placeholder="20-12-2022" name="order_date">
                    </div>

                    <div class="mb-3">
                        <label for="payment_method" class="form-label">payment_method</label>
                        <input type="text" class="form-control" id="payment_method" placeholder="COD" name="payment_method" >
                    </div>
                    <div class="mb-3">
                        <label for="order_status" class="form-label">order_status</label>
                        <input type="text" class="form-control" id="order_status" placeholder="In process" name="order_status" >
                    </div>
                    <button type="submit">Tambah Data</button>
                    <a href="/orders">Kembali</a><br><br><br><br>
                </form>

        </div>
    </div>
</div>
@endsection



