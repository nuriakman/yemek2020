<?php

  $YemekResim       = "tavukdurum.jpg";
  $YemekAdi         = "TAVUK DÖNER";
  $YemekFiyati      = 12;
  $YemekFirmaAdi    = "Öncü Döner";
  $YemekFirmaAdresi = "Cadde Boyu, no:13";
  $YemekKategori    = "Fastfood";


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


  <div class="container">

<h1><?php echo $YemekAdi; ?></h1>

<div class="row">
  <div class="col-md-5">

      <img src="<?php echo $YemekResim; ?>" class="img-fluid">

  </div> <!-- 5luk sutun-->
  <div class="col-md-4">

    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Kategori</th>
          <th scope="col"><?php echo $YemekKategori; ?></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Fiyat</th>
          <td><?php echo $YemekFiyati; ?></td>
        </tr>
        <tr>
          <th scope="row">Firma</th>
          <td><?php echo $YemekFirmaAdi; ?></td>

        </tr>
        <tr>
          <th scope="row">Adres</th>
          <td><?php echo $YemekFirmaAdresi; ?></td>
        </tr>
      </tbody>
    </table>

  </div> <!-- 4lük sutun-->
  <div class="col-md-3">
    <img src="tema.jpg" class="img-fluid">
  </div> <!-- 4lük sutun-->
</div>


<div class="row">
  <div class="col-md-3">
    <!-- BOŞ -->
  </div>


  <div class="col-md-6">

<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Yorum burada
    <span class="badge badge-primary badge-pill">5 Puan</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Dapibus ac facilisis in
    <span class="badge badge-primary badge-pill">2 Puan</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Morbi leo risus
    <span class="badge badge-primary badge-pill">1</span>
  </li>
</ul>


  </div> <!-- Yorum sonu -->

  <div class="col-md-3">
    <!-- BOŞ -->
  </div>


</div> <!-- Yorum Div -->



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>



  </div>  <!-- ana container -->



















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>