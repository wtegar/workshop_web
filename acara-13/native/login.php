<?php
require ('koneksi.php');

session_start();

if( isset($_POST['submit']) ) {
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass']
}

    if(!empty(trim($email)) && !empty(trim($pass))) {
        $query = "SELECT * FROM user_detail WHERE user_email = '$email'";
        $result = mysqli_query($koneksi, $query);
        $num = mysqli_num_rows($result);
        $id = $row['id'];
        $userVal = $row['user_email'];
        $passVal = $row['user_password'];
        $userName = $row['user_fullname'];
        $level = $row['level'];
    }
    if($num != 0) {
        if($userVal==$email && $passVal==$pass) {
            header('Location; home.php');
        }else{
            $error = 'user atau password salah!!';
            header('Location: home.php');
        }
    }else{
        $error = 'user tidak ditemukan!!';
        header('Location: login.php');
    }
}else{
    $error = 'Data tidak boleh kosong!!';
    echo $error;
}
}
?>