<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'])){
    header ("location: login.php");
}
if(!isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
?>

<html>
    <head>
        <title>project akhir</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <!--awal navbar-->
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <img src="usu.jpg.jpeg" height="33px" class="mr-3">
            <a class="navbar-brand" href="#"><h3>E-Learning</h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="#">utama</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#jadwal">jadwal</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    layanan
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#fasilitas">fasilitas</a></li>
                      <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#lokasi">lokasi</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#hak">hak cipta</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">ilmu komputer 2020</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="cari" aria-label="cari">
                <button class="btn btn-outline-success" type="submit">pencarian</button>
              </form>
            </div>
          </div>
        </nav>
        
        <!--akhir navbar-->
    
        <!--awal utama-->
    
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="bg3.jpeg" class="d-block w-100" alt="...">
              <div class="carousel-caption ">
                <h1>capailah cita-cita mu setinggi langit</h1>
                <p>pakai E-Learning saja</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="bg2.jpeg" class="d-block w-100" alt="...">
              <div class="carousel-caption ">
                <h1>bumi bersedia untuk mu</h1>
                <p>pakai E-Learning saja</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="bg1.jpeg" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                <h1>indahnya hari-hari mu di kampus</h1>
                <p>pakai E-Learning saja</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    
        <!--akhir utama-->
    
    <!--awal jadwal -->
    
    <div class="jumbotron" id="jadwal">
        <div class="container">
        <h1 class="display-4">jadwal kuliah</h1>
        <table class="table table-striped">
            <thead>
                <th>waktu</th>
                <th>senin</th>
                <th>selasa</th>
                <th>rabu</th>
                <th>kamis</th>
                <th>jumat</th>
            </thead>
            <tr>
                <th>08.00-09.40</th>
                <td>ap1</td>
                <td></td>
                <td>matdis</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>09.40-11.20</th>
                <td>pw1</td>
                <td>pw</td>
                <td></td>
                <td>algo</td>
                <td></td>
            </tr>
            <tr>
                <th>11.20-13.00</th>
                <td></td>
                <td>pds1</td>
                <td>sisdig</td>
                <td>prob</td>
                <td>sd1</td>
            </tr>
            <tr>
                <th>13.00-14.40</th>
                <td></td>
                <td></td>
                <td>bindo</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>14.40-16.40</th>
                <td>pkn</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    </div>
    
    <!--akhir jadwal-->
    
    <!--awal card-->
    <div class="container-fluid mt-5" id="fasilitas">
    <div class="row">
        <div class="col-lg-3 col-md-6">
    <div class="card" >
      <img src="gedung%20ilkom.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">gedung ilkom usu</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#https://www.usu.ac.id/id/fakultas-ilkom-dan-ti.html" class="btn btn-primary">buka</a>
      </div>
    </div>
    </div>
        
        <div class="col-lg-3 col-md-6">
    <div class="card">
      <img src="gedung%20ilkom.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    </div>
        
        <div class="col-lg-3 col-md-6">
    <div class="card">
      <img src="gedung%20ilkom.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    </div>
        
        <div class="col-lg-3 col-md-6">
    <div class="card" >
      <img src="gedung%20ilkom.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    </div>
    </div>
    </div>
    
    <!--akhir card-->
    
    <!--awal peta-->
    
    <div class="embed-responsive embed responsive-16by9 mt-5" id="lokasi">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.1079731398772!2d98.65751621744381!3d3.562607700000021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fdf9b784bcd%3A0xa10fd2123e2945ad!2sGedung%20S1%20Ilmu%20Komputer%20USU!5e0!3m2!1sen!2sid!4v1622858848046!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    
    <!--akhir peta-->
    
    <!awal footer-->
    
    <footer class="footer mt-5 mb-5 text center" id="hak">
        <img src="usu.jpg.jpeg" height="66px" class="mr-3">  UNIVERSITAS SUMATRA UTARA <hr> ILMU KOMPUTER E-Learning&copy;2020
      </footer>
    
    
    <!akhir footer-->
        
        
    </body>
</html>