@extends('layout/home')

@section('title', 'Form Tambah Data Categorys')

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
            <h3 class = "mt-3">Form Tambah Data Categorys</h3>
            
                <form method="post" action="/categorys"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="category_id" class="form-label">category_id</label>
                        <input type="text" class="form-control" id="category_id" placeholder="1" name="category_id" >
                    </div>

                    <div class="mb-3">
                        <label for="category_name" class="form-label">category_name</label>
                        <input type="text" class="form-control" id="category_name" placeholder="Male" name="category_name">
                    </div>

                    <div class="mb-3">
                        <label for="category_desc" class="form-label">category_desc</label>
                        <input type="text" class="form-control" id="category_desc" placeholder="good for u" name="category_desc" >
                    </div>

                    
                    <button type="submit">Tambah Data</button>
                    <a href="/categorys">Kembali</a> <br><br><br><br>
                </form>

        </div>
    </div>
</div>
@endsection
