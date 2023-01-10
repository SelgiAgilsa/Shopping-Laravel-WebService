@extends('layout/home')

@section('title', 'Form Tambah Userlog')

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
            <h3 class = "mt-3">Form Tambah Userlog</h3>
            
            <form method="post" action="/userlogs"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="user_email" class="form-label">User Email</label>
                        <input type="text" class="form-control" id="user_email" placeholder="abc@email.com" name="user_email" >
                    </div>

                    <div class="mb-3">
                        <label for="user_ip" class="form-label">User Ip</label>
                        <input type="text" class="form-control" id="user_ip" placeholder="20.01.53.0035" name="user_ip">
                    </div>

                    <div class="mb-3">
                        <label for="login_time" class="form-label">Login Time</label>
                        <input type="text" class="form-control" id="login_time" placeholder="22-02-2022" name="login_time" >
                    </div>

                    <div class="mb-3">
                        <label for="logout" class="form-label">Logout</label>
                        <input type="text" class="form-control" id="logout" placeholder="22-02-2022" name="logout">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" class="form-control" id="status" placeholder="0" name="status" >
                    </div>
                    <button type="submit">Tambah Data</button>
                    <a href="/userlogs">Kembali</a><br><br><br><br>
                </form>

        </div>
    </div>
</div>
@endsection



