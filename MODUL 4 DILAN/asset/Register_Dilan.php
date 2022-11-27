<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <div>
            <h2 style="margin: 55px; text-align :left">Register</h2>
            <div style="margin: 40px;" class="row">
              <div class="col">
              <form action="config/register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nma" name="nama"
                        placeholder="">
                </div>
                <div class="mb-3">
                    <label for="hp" class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control" id="hp" name="hp" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata sandi</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="password2" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" class="form-control" id="password2" name="password2" required>
                </div>
                <div>
                    <br>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Daftar</button>
                        <p>Anda sudah punya akun? <a href="./Login_Dilan.php">Register</a></p>
                    </div>
                </div>
            </form>
              </div>
              <div style="text-align :center" class="col">
                <img src="download.jpg" alt="Bootstrap" width="90%">
            </div>
          </div>

</html>