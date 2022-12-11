<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Register | Dilan_1202204363</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="asset/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="/asset/style/index.css" rel="stylesheet">
</head>

  <body>
    <h2 style="margin: 55px; text-align :left">Register</h2>
            <div style="margin: 40px;" class="row">
              <div class="col">
            <img src="download.jpg" width="90%" >
            </div>
            <div class="col-md-4 mt-4">
                <h1 class="titleLogin mb-3 fw-bold"></h1>
                <form method="POST" action="{{ route('register.action') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTelpon" class="form-label">Nomor handphone</label>
                        <input type="text" class="form-control" id="exampleInputTelpon" name="NoHp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputKonfirmasi" class="form-label">Konfirmasi password</label>
                        <input type="password" class="form-control" id="exampleInputKonfirmasi" name="KonfirmasiPassword" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn-register">Daftar</button>
                    <h5 class="forRegister fw-light mt-2">Anda sudah punya akun? <a href="/login">Login</a></h5>
                </form>
            </div>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>