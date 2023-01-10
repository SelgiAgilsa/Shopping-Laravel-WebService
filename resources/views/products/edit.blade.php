@extends('layout/home')

@section('title', 'Form Ubah Data Product')

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
            <h3 class = "mt-3">Form Ubah Data Product</h3>
            
                <form method="post" action="/products/{{ $adproducts->id }}"><br>
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="id" class="form-label">id</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $adproducts->id }}">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" class="form-control" id="category" name="category" value="{{ $adproducts->category }}">
                    </div>

                    <div class="mb-3">
                        <label for="subCategory" class="form-label">SubCategory</label>
                        <input type="text" class="form-control" id="subCategory"  name="subCategory" value="{{ $adproducts->subCategory }}">
                    </div>

                    <div class="mb-3">
                        <label for="productName" class="form-label">productName</label>
                        <input type="text" class="form-control" id="productName" name="productName" value="{{ $adproducts->productName }}">
                    </div>

                    <div class="mb-3">
                        <label for="productCompany" class="form-label">productCompany</label>
                        <input type="text" class="form-control" id="productCompany" name="productCompany" value="{{ $adproducts->productCompany }}">
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">productPrice</label>
                        <input type="text" class="form-control" id="productPrice" name="productPrice" value="{{ $adproducts->productPrice }}">
                    </div>
                    <div class="mb-3">
                        <label for="productPriceBeforeDiscount" class="form-label">productPriceBeforeDiscount</label>
                        <input type="text" class="form-control" id="productPriceBeforeDiscount" name="productPriceBeforeDiscount" value="{{ $adproducts->productPriceBeforeDiscount }}">
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">productDescription</label>
                        <input type="text" class="form-control" id="productDescription" name="productDescription" value="{{ $adproducts->productDescription }}">
                    </div>
                    <div class="mb-3">
                        <label for="productImage1" class="form-label">productImage1</label>
                        <input type="text" class="form-control" id="productImage1" name="productImage1" value="{{ $adproducts->productImage1 }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="productImage2" class="form-label">productImage2</label>
                        <input type="text" class="form-control" id="productImage2" name="productImage2" value="{{ $adproducts->productImage2 }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="productImage3" class="form-label">productImage3</label>
                        <input type="text" class="form-control" id="productImage3" name="productImage3" value="{{ $adproducts->productImage3 }}">
                    </div>
                    <div class="mb-3">
                        <label for="shippingCharge" class="form-label">shippingCharge</label>
                        <input type="text" class="form-control" id="shippingCharge" name="shippingCharge" value="{{ $adproducts->shippingCharge }}">
                    </div>
                    <div class="mb-3">
                        <label for="productAvailability" class="form-label">productAvailability</label>
                        <input type="text" class="form-control" id="productAvailability" name="productAvailability" value="{{ $adproducts->productAvailability }}">
                    </div>
                    <div class="mb-3">
                        <label for="postingDate" class="form-label">postingDate</label>
                        <input type="text" class="form-control" id="postingDate" name="postingDate" value="{{ $adproducts->postingDate }}">
                    </div>
                    <div class="mb-3">
                        <label for="updationDate" class="form-label">updationDate</label>
                        <input type="text" class="form-control" id="updationDate" name="updationDate" value="{{ $adproducts->updationDate }}">
                    </div>
                    
                    <button type="submit">Ubah Data</button>
                    <a href="/products">Kembali</a><br><br><br><br>
                </form>

        </div>
    </div>
</div>
@endsection
