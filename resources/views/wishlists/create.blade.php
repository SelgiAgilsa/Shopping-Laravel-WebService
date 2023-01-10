@extends('layout/home')

@section('title', 'Form Tambah Data Wishlists')

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
            <h3 class = "mt-3">Form Tambah Data Wishlists</h3>
            
                <form method="post" action="/wishlists"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User Id</label>
                        <input type="text" class="form-control" id="user_id" placeholder="1" name="user_id" >
                    </div>

                    <div class="mb-3">
                        <label for="product_id" class="form-label">Product Id</label>
                        <input type="text" class="form-control" id="product_id" placeholder="1" name="product_id">
                    </div>

                    <div class="mb-3">
                        <label for="posting_date" class="form-label">Posting Date</label>
                        <input type="text" class="form-control" id="posting_date" placeholder="23-08-2022" name="posting_date" >
                    </div>

                    
                    <button type="submit">Tambah Data</button>
                    <a href="/wishlists">Kembali</a> <br><br><br><br>
                </form>

        </div>
    </div>
</div>
@endsection
