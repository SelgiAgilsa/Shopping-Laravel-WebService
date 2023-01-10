@extends('layout/home')

@section('title', 'Form Ubah Data Product Review')

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
            <h3 class = "mt-3">Form Ubah Data Product Review</h3>
            
                <form method="post" action="/productreviews/{{ $adproductreviews->id }}"><br>
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="id" class="form-label">id</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $adproductreviews->id }}">
                    </div>
                    <div class="mb-3">
                        <label for="product_id" class="form-label">Product Id</label>
                        <input type="text" class="form-control" id="product_id" name="product_id" value="{{ $adproductreviews->product_id }}">
                    </div>

                    <div class="mb-3">
                        <label for="quality" class="form-label">quality</label>
                        <input type="text" class="form-control" id="quality"  name="quality" value="{{ $adproductreviews->quality }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $adproductreviews->price }}">
                    </div>

                    <div class="mb-3">
                        <label for="value" class="form-label">Value</label>
                        <input type="text" class="form-control" id="value" name="value" value="{{ $adproductreviews->value }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $adproductreviews->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="summary" class="form-label">Summary</label>
                        <input type="text" class="form-control" id="summary" name="summary" value="{{ $adproductreviews->summary }}">
                    </div>
                    <div class="mb-3">
                        <label for="review" class="form-label">Review</label>
                        <input type="text" class="form-control" id="review" name="review" value="{{ $adproductreviews->review }}">
                    </div>
                    <div class="mb-3">
                        <label for="review_date" class="form-label">Review Date</label>
                        <input type="text" class="form-control" id="review_date" name="review_date" value="{{ $adproductreviews->review_date }}">
                    </div>
                    
                    
                    <button type="submit">Ubah Data</button>
                    <a href="/productreviews">Kembali</a><br><br><br><br>
                </form>

        </div>
    </div>
</div>
@endsection
