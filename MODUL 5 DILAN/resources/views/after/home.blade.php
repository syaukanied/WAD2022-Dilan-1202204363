@extends('after.header')
@section('content')
 @auth

 <div>
        <br>
        <br>
            <div style="margin: 40px;" class="row">
              <div class="col">
                <h1>Selamat Datang Di Show Room Dilan</h1>
                <a>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.<a>
                  <br>

                  <a href="/product">
                     <button type="button" class="btn btn-primary btn-mycar mt-4">My Car</button>
                   </a>

                   <div class="w-100 mt-5"></div>
                   <img src="logo-ead.png" alt="logo" width=20%>    
                   <span class="ms-3">Dilan_1202204136</span>     
                </div>
              <div style="text-align :center" class="col">
                <img src="download.jpg" alt="mobil" width=110% >
            </div>
          </div>


@endauth
@guest

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </div>
        </div>
        <div class="d-flex">
          <a href="/login">
          <button class="btn btn-primary" type="submit">Login</button></a>
      </div>
      </div>
    </nav>
<!-- Navbar End -->

<div>
        <br>
        <br>
            <div style="margin: 40px;" class="row">
              <div class="col">
                <h1>Selamat Datang Di Show Room Dilan</h1>
                <a>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.<a>
                  <br>

                  <a href="/product">
                     <button type="button" class="btn btn-primary btn-mycar mt-4">My Car</button>
                   </a>

                   <div class="w-100 mt-5"></div>
                   <img src="logo-ead.png" alt="logo" width=20%>    
                   <span class="ms-3">Dilan_1202204136</span>     
                </div>
              <div style="text-align :center" class="col">
                <img src="download.jpg" alt="mobil" width=110% >
            </div>
          </div>
  @endguest
  @endsection