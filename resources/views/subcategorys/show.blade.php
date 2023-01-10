@extends('layout/home')

@section('title', 'Sub Categorys')

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
            <h3 class = "mt-3">Detail Sub Categorys</h3>
            
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$adsubcategorys->category_id}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$adsubcategorys->sub_category}}</h6>
                        

                  <a href="{{ $adsubcategorys->id }}/edit">Edit</a>
                  <form action="/subcategorys/{{ $adsubcategorys->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/subcategorys">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
