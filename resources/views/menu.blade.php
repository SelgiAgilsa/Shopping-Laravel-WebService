<!DOCTYPE html>
<html>
<head>
<title>SALEgiShop</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .container3 {
  width: 100%;
  padding: 20px;
  margin: 100px auto;
  display: flex;
  flex-direction: row;
  justify-content: center;
}
.box {
  width: 200px;
  margin: 0 10px;
  background: #008F86;
}
.box img {
  display: block;
  width: 100%;
  border-radius: 10px;
  margin-bottom: 0px;
  margin-top: 0px;
  box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
}
.box:hover {
  transform: scale(1.5);
  z-index: 2;
  align-items: center;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-teal w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>SALEgiShop</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="/login" class="w3-bar-item w3-button">Admin</a>
    </div>
    <div class="w3-right w3-hide-small">
      <a href="/about" class="w3-bar-item w3-button">About Us</a>
    </div>
    <div class="w3-right w3-hide-small">
      <a href="#produk" class="w3-bar-item w3-button">Product</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:900px;" id="home">
  <br><br><br><img class="w3-image" src="images/hyung.png" alt="Architecture" width="900" height="500">
  <div class="w3-display-middle w3-margin-top w3-center">
  </div>
</header>


<div class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <center><h4 class="font-weight-bold">Category
                    </h4></center>
                </div>
            </div>
            <!-- Product Gallery -->
            <div class="container3 row pt-lg-3 w3-center">
              <div class="box">
                <img src="images/1.png" />
                <br><h5>Male<br>1</h5></a> 
              </div>
              <div class="box">
                <img src="images/2.png" />
                <br><h5>Female<br>2</h5></a> 
              </div>
              <div class="box">
                <img src="images/3.png" />
                <br><h5>Kids<br>3</h5></a>
              </div>
            </div>
        </div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="produk">
    <h3 class="w3-border-bottom w3-border-info-grey w3-padding-16">Product</h3>
  </div>

  @foreach ($adproducts as $adnproduct)
  <!-- Baris 1 -->
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <i class="fa fa-image" style="font-size:200px"></i>
          <div class="w3-display-middle w3-display-hover">
            <a href="/product1/{{ $adnproduct -> id }}" class="w3-button w3-teal">Beli <i class="fa fa-shopping-cart"></i></a>
          </div>
        </div>
        <p>{{$adnproduct -> productName}}<br><b>Rp {{$adnproduct->productPrice}}</b></p>
      </div>
    </div>
    @endforeach

    </div>
  </div>
</body>
</html>
