<?php
require ('koneksi.php');
if( isset($_POST['update'])){
    $userid = $_POST['txt_id'];
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];
    $userName = $_POST['txt_nama'];
    
    $query = "UPDATE user_detail SET user_password ='$userPass', user_fullname='$userName', WHERE id='$userid'";
    echo $query;
    $result = mysqli_query($koneksi,$query);
    header('Location: home.php');
}
$id = $_GET['id'];
$query "SELECT * FROM user_detail WHERE id='$id'";
$result = mysqli_query($koneksi,$query)or die(mysqli_error()){

while ($row = mysqli_fetch_array($result)){
    $id = $row['user_email'];
    $userMail = $row[]
}
}