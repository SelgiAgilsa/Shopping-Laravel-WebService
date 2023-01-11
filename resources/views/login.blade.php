@extends('layout/home')

@section('title', 'Admin')

@section('container')

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-teal w3-wide w3-padding w3-card">
    <a href="/menu" class="w3-bar-item w3-button"><b>SALEgiShop</b></a>
    <div class="w3-right w3-hide-small">
      <a href="/menu" class="w3-bar-item w3-button">Home</a>
    </div>
  </div>
</div>
<br><br><br>

<div class="w3-cell-row w3-padding-64">
  <div class="w3-container w3-cell ">
    <center><h1><br><br>Login<br>Admin</h1></center>
  </div>
  <div class="w3-container w3-cell">
    <form method="post" action="/dashboard"><br>
    @csrf
                <div class="mb-3">
                  <label for="username" class="form-label">Email / Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username" >
                </div><br>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="text" class="form-control" id="password" placeholder="Masukkan Password" name="password">
                </div><br><br>
                <button class="btn btn-info" type="submit">Submit</button>
                
              </form>
  </div>
</div>


@endsection
