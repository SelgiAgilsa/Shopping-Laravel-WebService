@extends('layout/home')

@section('title', 'Detail Product')

@section('container')

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-teal w3-wide w3-padding w3-card">
    <a href="/menu" class="w3-bar-item w3-button"><b>SALEgiShop</b></a>
    <div class="w3-right w3-hide-small">
      <a href="/menu" class="w3-bar-item w3-button">Home</a>
    </div>
    <div class="w3-right w3-hide-small">
      <a href="/about" class="w3-bar-item w3-button">About Us</a>
    </div>
  </div>
</div>
<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Product</h3>
            </div>
          </div>
            <div class="row mt-3">
                    <div class="col">
                        <div class="card border-secondary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                      <center><i class="fa fa-image" style="font-size:300px"></i></center>
                                    </div>
                                    <div class="col">
                                        <h4 class="card-title">{{$adproducts->productName}}</h4>
                                        <hr>
                                        <p class="card-text"><s>Rp {{$adproducts->productPriceBeforeDiscount}}</s> Rp {{$adproducts->productPrice}}</p>
                                        <p class="card-text">Description&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;: {{$adproducts->productDescription}}</p>
                                        <p class="card-text">Brand&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: {{$adproducts->productCompany}}</p>
                                        <p class="card-text">Category&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;: {{$adproducts->category}}</p>
                                        <p class="card-text">Sub Category&emsp;&emsp;&emsp;&nbsp;&nbsp;: {{$adproducts->subCategory}}</p>
                                        <p class="card-text">Product Availability&emsp;: {{$adproducts->productAvailability}}</p><br><br>
                                        <a href="/checkout" type="button" class="btn btn-info">Beli</a>
                                        <a href="/menu">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <br><br>

        
    
</div>
@endsection

