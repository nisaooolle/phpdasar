<?php 
session_start(); 
 
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) { 
    header("location: login.php"); 
    exit(); 
} 
?>
<?php
include "connect.php";
$id = $_GET['id'];
$get_data = "select * from siswa where id=$id";
$result_data = mysqli_query($conn, $get_data);
$row = mysqli_fetch_assoc($result_data);
$nama_siswa = $row['nama_siswa'];
$alamat = $row['alamat'];
$kelas = $row['kelas'];
$tanggal_lahir = $row['tanggal_lahir'];
$tempat_lahir = $row['tempat_lahir'];
if (isset($_POST['submit'])) {
    $nama_siswa = $_POST['nama_siswa']; 
    $alamat = $_POST['alamat']; 
    $kelas =$_POST['kelas'];
    $tanggal_lahir =$_POST['tanggal_lahir'];
    $tempat_lahir =$_POST['tempat_lahir'];
    $sql = "update siswa set id=$id, nama_siswa='$nama_siswa', alamat='$alamat',kelas='$kelas', tanggal_lahir='$tanggal_lahir',tempat_lahir='$tempat_lahir' where id=$id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        header('location:read.php');
    }else {
        die($conn->connect_error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">Update</h3>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="nama" name="nama_siswa"value="<?php echo $nama_siswa?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat"value="<?php echo $alamat?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas"value="<?php echo $kelas?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Tanggal lahir</label>
                <input type="text" class="form-control" id="tanggal" name="tanggal_lahir"value="<?php echo $tanggal_lahir?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Tempat lahir</label>
                <input type="text" class="form-control" id="tempat" name="tempat_lahir" value="<?php echo $tempat_lahir?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>