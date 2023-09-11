<?php 
$servername = "localhost:3306";
$database_name = "db_sekolah";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $database_name);

if ($conn->connect_error) {
    die("koneksi gagal : " . $conn->connect_error);
}
?>