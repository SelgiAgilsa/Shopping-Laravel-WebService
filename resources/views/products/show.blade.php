@extends('layout/home')

@section('title', 'Products')

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
            <h3 class = "mt-3">Detail Products</h3>
            
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$adproducts->category}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$adproducts->subCategory}}</h6>
                  <p class="card-text">productName     : {{$adproducts->productName}}</p>
                  <p class="card-text">productCompany : {{$adproducts->productCompany}}</p>
                  <p class="card-text">productPrice             : {{$adproducts->productPrice}}</p>
                  <p class="card-text">productPriceBeforeDiscount            : {{$adproducts->productPriceBeforeDiscount}}</p>
                  <p class="card-text">productDescription          : {{$adproducts->productDescription}}</p>
                  <p class="card-text">productImage1     : {{$adproducts->productImage1}}</p>
                  <p class="card-text">productImage2          : {{$adproducts->productImage2}}</p>
                  <p class="card-text">productImage3          : {{$adproducts->productImage3}}</p>
                  <p class="card-text">shippingCharge          : {{$adproducts->shippingCharge}}</p>
                  <p class="card-text">productAvailability         : {{$adproducts->productAvailability}}</p>
                  <p class="card-text">postingDate          : {{$adproducts->postingDate}}</p>
                  <p class="card-text">updationDate          : {{$adproducts->updationDate}}</p>

                  <a href="{{ $adproducts->id }}/edit">Edit</a>
                  <form action="/products/{{ $adproducts->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/products">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
