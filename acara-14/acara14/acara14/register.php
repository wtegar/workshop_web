<?php
require ('koneksi.php');
require ('query.php');

$obj = new crud;

if($_SERVER['REQUEST_METODE']=='POST'):
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];
    $name = $_POST['txt_name'];
    if($obj->insertData($email, $pass, $name)):
        echo '<div class="alert alert-success">Data berhasil disimpan</div>';
    else: 
        echo '<div class="alert alert-danger">Data gagal disimpan</div>';
endif;
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="login.php" method="POST">
        <p>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="name" name="txt_email" required></p>
        <p>password : <input type="password" name="txt_pass"></p>
        <p>nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="name" name="txt_email" required></p>
        <button type="submit" name="register">Register</button>
    </form>
</body>
</html>