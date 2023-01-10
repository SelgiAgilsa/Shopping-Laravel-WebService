@extends('layout/home')

@section('title', 'Form Ubah Userlog')

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
            <h3 class = "mt-3">Form Ubah Userlog</h3>
            
            <form method="post" action="/userlogs/{{ $aduserlogs->id }}"><br>
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="id" class="form-label">id</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $aduserlogs->id}}">
                    </div>
                    <div class="mb-3">
                        <label for="user_email" class="form-label">User Email</label>
                        <input type="text" class="form-control" id="user_email" name="user_email" value="{{ $aduserlogs->user_email}}">
                    </div>

                    <div class="mb-3">
                        <label for="user_ip" class="form-label">User Ip</label>
                        <input type="text" class="form-control" id="user_ip"  name="user_ip" value="{{ $aduserlogs->user_ip }}">
                    </div>

                    <div class="mb-3">
                        <label for="login_time" class="form-label">Login Time</label>
                        <input type="text" class="form-control" id="login_time" name="login_time" value="{{ $aduserlogs->login_time }}">
                    </div>

                    <div class="mb-3">
                        <label for="logout" class="form-label">Logout</label>
                        <input type="text" class="form-control" id="logout" name="logout" value="{{ $aduserlogs->logout }}">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" class="form-control" id="status" name="status" value="{{ $aduserlogs->status }}">
                    </div>
                   
                    
                    
                    <button type="submit">Ubah Data</button>
                    <a href="/userlogs">Kembali</a><br><br><br><br>
                </form>

        </div>
    </div>
</div>
@endsection











