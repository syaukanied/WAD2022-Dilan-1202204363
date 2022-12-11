@extends('header')
<body>
  <!-- Navbar Start -->
  <?php
    $getUser = mysqli_query($connection, "select * from users WHERE email='$_SESSION[email]'");
    $dataUser = mysqli_fetch_array($getUser);
    ?>
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
            <a class="nav-link" href="../Home-Dilan.php">Home</a>
            <a class="nav-link" href="../pages/ListCar-Dilan.php">MyCar</a>
          </div>
        </div>
        <div class="d-flex">
          <a href="../pages/Add-Dilan.php">
          <button class="btn btn-outline-dark" type="submit" style="color: white;">add car</button></a>
          <div class="dropdown ms-4">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $_SESSION['email'];?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="../pages/Profile-Dilan.php">Profile</a></li>
              <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  <!-- Navbar End -->

  <!-- Form Start -->
  <section id='detail'>
    <div class="container">
      <?php
      while ($obtainData = mysqli_fetch_array($result)) {
        echo "
                <h1 class='add'>" . $obtainData["nama_mobil"] . "</h1>
                <p class='addparagraf'>Detail Mobil " . $obtainData["nama_mobil"] . "</p>
                <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                  <img src='../asset/images/" . $obtainData["foto_mobil"] . "' alt='foto_mobil'>
                  <form action='../config/edit.php?id=" . $obtainData["id_mobil"] . "' method='POST' enctype='multipart/form-data'>
                    <label for='nama'>Nama Mobil</label>
                    <input type='text' id='nama' name='nama' value='" . $obtainData["nama_mobil"] . "' >
                    <label for='pemilik'>Nama Pemilik</label>
                    <input type='text' id='pemilik' name='pemilik' value='" . $obtainData["pemilik_mobil"] . "' >
                    <label for='merk'>Merk</label>
                    <input type='text' id='merk' name='merk' value='" . $obtainData["merk_mobil"] . "' >
                    <label for='tanggalbeli'>Tanggal Beli</label>
                    <input type='date' id='tanggalbeli' name='tanggalbeli' value='" . $obtainData["tanggal_beli"] . "' >
                    <label for='desc'>Deskripsi</label>
                    <textarea id='desc' name='desc' style='height:200px; width: 600px; border-radius: 8px;' > " . $obtainData["deskripsi"] . " </textarea>
                    <label for='inputGroupFile01'>Foto</label>
                    <input type='file' class='form-control' id='inputGroupFile01' value='" . $obtainData["foto_mobil"] . "' name='gambar' style='height: 40px;'>
                    <label for='status'>Status Pembayaran</label>
                    <span class='d-flex'>
                      <input type='radio' name='status' id='lunas' value='Lunas' " . (($obtainData["status_pembayaran"] == 'Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='lunas' style='margin-top: 15px; margin-right:10px;'>Lunas</label>
                      <input type='radio' name='status' id='belum' value='Belum Lunas' " . (($obtainData["status_pembayaran"] == 'Belum Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='belum' style='margin-top: 15px;'>Belum Lunas</label>
                    </span>
                    <button type='submit' class='btn btn-primary' style='margin-top: 40px;'>Selesai</button>
                  </form>
                </div>
            ";
      }
      ?>
    </div>
  </section>
  <!-- Form End -->

  <div class="container">
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="true" data-delay="5000" data-autohide="false">
    <div class="toast-header">
        <span class="rounded mr-2 bg-warning" style="width: 15px;height: 15px"></span>

        <strong class="mr-auto">Alert</strong>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
    </div>
    <div class="toast-body">
        Data Berhasil diupdate.
    </div>
</div>

  <script src="asset/js/jquery.js"></script>
    <script src="asset/js/popper.js"></script>
    <script src="asset/js/bootstrap.js"></script>


    <script>
        $('.toast').toast('show');
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>