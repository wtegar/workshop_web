<?php
require ('koneksi.php');
require ('query.php');
$email = $_GET['user_fullname'];
$obj = new crud;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <H1>Selamat Datang <?php echo $email;?></H1>
    <table border='1'>
        <tr>
        <td>No</td>
        <td>Email</td>
        <td>Nama</td>
        <td></td>
        </tr>
<?php
    $data=$obj->lihatData();
    $no = 1;
    if($data->rowCount()>0){
        while($row=$data->fetch(PDO::FETCH_ASSOC)){?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $row['user_email'];?></td>
            <td><?php echo $row['user_fullname'];?></td>
            <td><a href="edit.php?id=<?php echo $row['id'];?>">edit</a>
                <a href="hapus.php?id=<?php echo $row['id'];?>">hapus</a>
        </td>
        </tr>
        <?php
        $no++;
        }}
        ?>
?>
    </table>
</body>
</html>