<?php
    require './connector.php';

    $id_mobil = $_GET['id_mobil'];
    $nama_mobil = $_POST['nama_mobil'];
    $nama_pemilik = $_POST['nama_pemilik'];
    $merek = $_POST['merek'];
    $tgl_beli = $_POST['tgl_beli'];
    $deskripsi = $_POST['deskripsi'];
    $status = $_POST['status'];
    $foto_mobil = $_FILES['foto_mobil']['name'];
    $target = "../img/";

    if (move_uploaded_file($_FILES['foto_mobil']['tmp_name'], $target . $foto_mobil)) {
        $sql = "UPDATE showroom_dilan_table SET nama_mobil = '$nama_mobil', pemilik_mobil = '$nama_pemilik', merk_mobil = '$merek',
        tanggal_beli = '$tgl_beli', deskripsi = '$deskripsi', foto_mobil = '$foto_mobil', status_pembayaran = '$status' 
        WHERE id_mobil = '$id_mobil'";
        
        if (mysqli_query($connect, $sql)) {
            header("location: ../ListCar_Dilan.php");
            } else {
                header("location: ../ListCar_Dilan.php");
            }
        } else {
            echo "Gagal";
        }
?>