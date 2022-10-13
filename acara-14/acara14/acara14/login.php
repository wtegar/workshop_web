<?php
$koneksi = mysqli_connect("localhost", "root", "", "user1");
if(isset($_POST['submit'])){
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];
    if(!empty(trim($email)) && !empty(trim($pass))){
        $query = "SELECT * FROM user_detail WHERE user_email = '$email'";
        $result = mysqli_query($koneksi, $query);
        $num = mysqli_num_rows($result);

        while($row = mysqli_fetch_array($result)){
            $userVal = $row['user_email'];
            $passVal = $row['user_password'];
            $username = $row['user_fullname'];
        }
        if($num != 0){
            if($userVal==$email && $passVal==$pass){
                header('Location: login.php');
            }else{
                $error = 'user atau password salah!!';
                header('Location: login.php');
            }
        }else{
            $error = 'Data tidak boleh kosong !!';
            echo $error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="login.php" method="POST">
        <p>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
        <p>password : <input type="password" name="txt_pass"></p>
        <button type="submit" name="submit">Sign in</button>
    </form>
    <p><a href="register.php">daftar</p>
</body>
</html>