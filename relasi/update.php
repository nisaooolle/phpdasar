<?php
include 'connect.php';
$id = $_GET['id'];
$get_data = "select * from siswa where id_siswa=$id";
$result_data = mysqli_query($conn, $get_data);
$row = mysqli_fetch_assoc($result_data);
$nama_siswa = $row['nama_siswa'];
$nisn = $row['nisn'];
$gender = $row['gender'];

// code for update data siswa
if (isset($_POST['submit'])) {
    $input_nama_siswa = $_POST['nama_siswa'];
    $input_nisn = $_POST['nisn'];
    $input_gender = $_POST['gender'];
    $input_id_kelas = $_POST['id_kelas'];
    $sql = "update siswa set id_siswa=$id, nama_siswa='$input_nama_siswa', nisn='$input_nisn', gender='$input_gender', id_kelas='$input_id_kelas' where id_siswa=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:siswa.php');
    } else {
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
        <form action="" method="post" class="row">
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?php echo "$nama_siswa" ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Nisn</label>
                <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo "$nisn" ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Gender</label>
                <select name="gender" class="form-select">
                    <option selected value="<?php echo "$gender" ?>">Pilih Gender</option>
                    <option value="laki-laki">Laki Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="kelas" class="form-label">Tingkat Kelas</label>
                <select name="id_kelas" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected value="<?php echo "$input_id_kelas" ?>">Pilih Kelas</option>
                    <?php
                    $sql = "select * from kelas";
                    $result = mysqli_query($conn, $sql);
                    foreach ($result as $row) :
                    ?>
                        <option value="<?= $row['id'] ?>"><?= $row['tingkat_kelas'] . '' . $row['jurusan_kelas'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>