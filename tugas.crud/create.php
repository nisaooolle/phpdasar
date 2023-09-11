<?php
session_start();

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) { 
    header("location: login.php"); 
    exit(); 
} 
?>
<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $nama_siswa =$_POST['nama'];
    $alamat =$_POST['alamat'];
    $kelas =$_POST['kelas'];
    $tanggal_lahir =$_POST['tanggal'];
    $tempat_lahir =$_POST['tempat'];
    $sql ="insert into siswa(nama_siswa, alamat,kelas,tanggal_lahir,tempat_lahir)values('$nama_siswa','$alamat','$kelas','$tanggal_lahir','$tempat_lahir')";
    $result = mysqli_query($conn,$sql);
    if($result) {
        header('location:read.php');
    }else{
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
        <h3 class="text-center">Create</h3>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Tanggal lahir</label>
                <input type="text" class="form-control" id="tanggal" name="tanggal">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Tempat lahir</label>
                <input type="text" class="form-control" id="tempat" name="tempat">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>