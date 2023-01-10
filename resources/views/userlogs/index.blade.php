@extends('layout/home')

@section('title', 'Show Userlog')

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
            <h3 class = "mt-3">Daftar Userlog</h3>
            <a href="/userlogs/create" class="btn btn-info my-3">Tambah Userlog</a>
            <ul class="list-group">
                @foreach ($aduserlogs as $adnuserlog)
                <li class="list-group-item d-flex justify-content-between align-items-center">ID =
                  {{ $adnuserlog -> id}}
                  <a href="/userlogs/{{ $adnuserlog -> id }}" class="badge badge-info"> Detail </a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection

