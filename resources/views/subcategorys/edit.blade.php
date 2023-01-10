@extends('layout/home')

@section('title', 'Form Ubah Data Sub Category')

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
            <h3 class = "mt-3">Form Ubah Data Sub Category</h3>
            
                <form method="post" action="/subcategorys/{{ $adsubcategorys->id }}"><br>
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="id" class="form-label">id</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $adsubcategorys->id }}">
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category Id</label>
                        <input type="text" class="form-control" id="category_id" name="category_id" value="{{ $adsubcategorys->category_id }}">
                    </div>

                    <div class="mb-3">
                        <label for="sub_category" class="form-label">Sub Category</label>
                        <input type="text" class="form-control" id="sub_category"  name="sub_category" value="{{ $adsubcategorys->sub_category }}">
                    </div>
                    
                    
                    <button type="submit">Ubah Data</button>
                    <a href="/subcategorys">Kembali</a><br><br><br><br>
                </form>

        </div>
    </div>
</div>
@endsection
