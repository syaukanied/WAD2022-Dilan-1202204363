@extends('after.header')
@section('content')
 @auth

<!doctype html> 
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Add Car | Dilan_1202204363</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
</head>

<body>

  <section id='form'>
    <div style="margin: 40px; margin-top: -40px" class="additem">
      <h1 class="add">Tambah Mobil</h1>
      <p>Tambah mobil baru anda ke list Show Room</p>
      <form action="/product" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" id="name" name="user_id" value="{{ Auth::user()->id }}">

        <label for="nama">Nama Mobil</label>
        <input type="text" id="name" name="name" placeholder="">

        <label for="pemilik">Nama Pemilik</label>
        <input type="text" id="owner" name="owner" placeholder="">

        <label for="merk">Merk</label>
        <input type="text" id="name" name="merk" placeholder="">

        <label for="tanggalbeli">Tanggal Beli</label>
        <input type="datetime-local" value="{{ now()->setTimezone('T')->format('Y-m-dTh:m') }}" class="form-control" id="name" name="tanggal">

        <label for="name">Deskripsi</label>
        <textarea name="deskripsi" placeholder="" ></textarea>

        <label for="inputGroupFile01">Foto</label>
        <input type="file" class="custom-file-input" id="img_path" name="img_path" style="height: 40px;">

        <label for="status">Status Pembayaran</label>
        <span class="d-flex">
          <input type="radio" name="status" id="lunas" value="Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="lunas" style="margin-top: 15px; margin-right:10px;">Lunas</label>
          <input type="radio" name="status" id="belum" value="Belum Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="belum" style="margin-top: 15px;">Belum Lunas</label>
        </span>
        <button type="submit" class="btn btn-primary" name="btn-simpan" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/popper.js"></script>
    <script src="asset/js/bootstrap.js"></script>


    <script>
        $('.toast').toast('show');
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

@endauth
@endsection