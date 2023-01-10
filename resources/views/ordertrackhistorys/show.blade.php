@extends('layout/home')

@section('title', 'Order Track Historys')

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
            <h3 class = "mt-3">Detail Order Track Historys</h3>
            
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$adordertrackhistorys->order_id}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$adordertrackhistorys->status}}</h6>
                  <p class="card-text">remark     : {{$adordertrackhistorys->remark }}</p>
                  <p class="card-text">posting_date     : {{$adordertrackhistorys->posting_date}}</p>
                  
                  <a href="{{ $adordertrackhistorys->id }}/edit">Edit</a>
                  <form action="/ordertrackhistorys/{{ $adordertrackhistorys->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/ordertrackhistorys">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection












