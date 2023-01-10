@extends('layout/home')

@section('title', 'Form Ubah Order Track Historys')

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
            <h3 class = "mt-3">Form Ubah Order Track Historys</h3>
            
            <form method="post" action="/ordertrackhistorys/{{ $adordertrackhistorys->id }}"><br>
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="id" class="form-label">id</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $adordertrackhistorys->id}}">
                    </div>
                    <div class="mb-3">
                        <label for="order_id" class="form-label">order_id</label>
                        <input type="text" class="form-control" id="order_id" name="order_id" value="{{ $adordertrackhistorys->order_id}}">
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">status</label>
                        <input type="text" class="form-control" id="status"  name="status" value="{{ $adordertrackhistorys->status }}">
                    </div>

                    <div class="mb-3">
                        <label for="remark" class="form-label">remark</label>
                        <input type="text" class="form-control" id="remark" name="remark" value="{{ $adordertrackhistorys->remark }}">
                    </div>

                    <div class="mb-3">
                        <label for="posting_date" class="form-label">Order Date</label>
                        <input type="text" class="form-control" id="posting_date" name="posting_date" value="{{ $adordertrackhistorys->posting_date }}">
                    </div>
                      
                    
                    <button type="submit">Ubah Data</button>
                    <a href="/ordertrackhistorys">Kembali</a><br><br><br><br>
                </form>

        </div>
    </div>
</div>
@endsection











