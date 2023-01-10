@extends('layout/home')

@section('title', 'Product Reviews')

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
            <h3 class = "mt-3">Detail Product Reviews</h3>
            
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$adproductreviews->product_id}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$adproductreviews->quality}}</h6>
                  <p class="card-text">price     : {{$adproductreviews->price}}</p>
                  <p class="card-text">value : {{$adproductreviews->value}}</p>
                  <p class="card-text">name             : {{$adproductreviews->name}}</p>
                  <p class="card-text">summary            : {{$adproductreviews->summary}}</p>
                  <p class="card-text">review          : {{$adproductreviews->review}}</p>
                  <p class="card-text">review_date     : {{$adproductreviews->review_date}}</p>
                  
                  <a href="{{ $adproductreviews->id }}/edit">Edit</a>
                  <form action="/productreviews/{{ $adproductreviews->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/productreviews">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
