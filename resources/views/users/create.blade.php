@extends('layout/home')

@section('title', 'Form Tambah User')

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
            <h3 class = "mt-3">Form Tambah User</h3>
            
            <form method="post" action="/users"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Selgi" name="name" >
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="abc@gmail.com" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="contactno" class="form-label">Contact No</label>
                        <input type="text" class="form-control" id="contactno" placeholder="08123456789" name="contactno" >
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" placeholder="abc123" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="shippingAddress" class="form-label">Shipping Address</label>
                        <input type="text" class="form-control" id="shippingAddress" placeholder="Jl. Mawar" name="shippingAddress" >
                    </div>
                    <div class="mb-3">
                        <label for="shippingState" class="form-label">Shipping State</label>
                        <input type="text" class="form-control" id="shippingState" placeholder="Indonesia" name="shippingState" >
                    </div>
                    <div class="mb-3">
                        <label for="shippingCity" class="form-label">Shipping City</label>
                        <input type="text" class="form-control" id="shippingCity" placeholder="Bali" name="shippingCity" >
                    </div>
                    <div class="mb-3">
                        <label for="shippingPincode" class="form-label">Shipping Pincode</label>
                        <input type="text" class="form-control" id="shippingPincode" placeholder="123456" name="shippingPincode" >
                    </div>
                    <div class="mb-3">
                        <label for="billingAddress" class="form-label">Billing Address</label>
                        <input type="text" class="form-control" id="billingAddress" placeholder="Jl. Mawar" name="billingAddress" >
                    </div>
                    <div class="mb-3">
                        <label for="billingState" class="form-label">Billing State</label>
                        <input type="text" class="form-control" id="billingState" placeholder="Indonwsia" name="billingState" >
                    </div>
                    <div class="mb-3">
                        <label for="billingCity" class="form-label">Billing City</label>
                        <input type="text" class="form-control" id="billingCity" placeholder="Bali" name="billingCity" >
                    </div>
                    <div class="mb-3">
                        <label for="billingPincode" class="form-label">Billing Pincode</label>
                        <input type="text" class="form-control" id="billingPincode" placeholder="123456" name="billingPincode" >
                    </div>
                    <div class="mb-3">
                        <label for="regDate" class="form-label">Reg Date</label>
                        <input type="text" class="form-control" id="regDate" placeholder="22-06-2022" name="regDate" >
                    </div>
                    <div class="mb-3">
                        <label for="updationDate" class="form-label">updationDate</label>
                        <input type="text" class="form-control" id="updationDate" placeholder="22-06-2022" name="updationDate" >
                    </div>
                    <button type="submit">Tambah Data</button>
                    <a href="/users">Kembali</a><br><br><br><br>
                </form>

        </div>
    </div>
</div>
@endsection



