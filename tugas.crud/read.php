<?php
session_start();

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("location: login.php");
    exit();
}
?>
<?php include 'connect.php' ?>
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
        <h3 class="text-center">Read</h3>
        <div class="text-end mt-4"> <a href="create.php?id='.$id.'" class="btn btn-sm btn-success"> Create</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Siswa</th>
                    <th>Alamat </th>
                    <th>Kelas</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from siswa";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($data = mysqli_fetch_assoc($result)) {
                        $id = $data['id'];
                        $nama_siswa = $data['nama_siswa'];
                        $alamat = $data['alamat'];
                        $kelas = $data['kelas'];
                        $tanggal_lahir = $data['tanggal_lahir'];
                        $tempat_lahir = $data['tempat_lahir'];
                        echo '
            <tr> 
            <td> ' . $nama_siswa . '</td>
            <td> ' . $alamat . '</td>
            <td> ' . $kelas . '</td>
            <td> ' . $tanggal_lahir . '</td>
            <td> ' . $tempat_lahir . '</td>
            <td class="text-center">
            <a href="update.php?id=' . $id . '" class="btn btn-sm btn-primary"> Update</a>
            <button onClick="hapus(' . $id . ')" class="btn btn-sm btn-danger">Delete</button>
            </td>
            </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
        <div class="text-end mt-4">
            <button onclick="logout()" class="text-end p-2 btn btn-danger">Logout</button>
        </div>
    </div>
    <script>
        function logout() {
            var yes = confirm('Yakin Mau Logout')
            if (yes == true) {
                window.location.href = "logout.php";
            }
        }

        function hapus(id) {
            var yes = confirm('Yakin di hapus?');
            if (yes == true) {
                window.location.href = "delete.php?id=" + id;
            }
        }
    </script>
</body>

</html>