<?php
    require './connector.php';

    $email=$_POST['email'];
    $sandi=$_POST['password'];
    
    $query=mysqli_query($connect, "SELECT email from users_dilan where email = '$email' && password = '$sandi'");
    $rows=mysqli_num_rows($query);

    if ($rows) {
        $data=mysqli_fetch_assoc($query);
        if (isset($_POST['sudahlogin'])){
            $sudahlogin = $_POST['sudahlogin'];
            setcookie('sudahlogin', $sudahlogin, time()+86400*30, '/');
        }

        setcookie('email', $email, time()+86400*30, '/');
        setcookie('nama', $data['nama'], time()+86400*30, '/');
        setcookie('hp', $data['hp'], time()+86400*30, '/');
        header('location: ../Home_Dilan.php');

    }else{
        echo 'wrong email/password';
    }
?>