<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nama: <input type="text" name="fname">
  <br>
  Umur: <input type="text" name="umur">
  <br>
  Gender: <input type="radio" name="gender" value="laki-laki"><label for="">laki-laki</label>
  <input type="radio" name="gender" value="perempuan"><label for="">perempuan</label>
  <br>
  Makanan Kesukaan: <input type="checkbox" name="makanan[]" value="bakso"><label for="">Bakso</label>
  <input type="checkbox" name="makanan[]" value="mie-ayam"><label for="">mie ayam</label>
  <input type="checkbox" name="makanan[]" value="kebab"><label for="">kebab</label>
  <br>
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    $umur = $_POST['umur'];
    $gender = $_POST['gender'];
    $makanan = $_POST['makanan'];
    if (empty($name) && empty($umur) && empty($gender) && empty($makanan)) {
        echo "Input terlebih dahulu";
    } else {
        echo "nama saya adalah $name <br> umur saya $umur tahun <br> saya bergender $gender <br> makanan kesukaan saya adalah ";
        $N = count($makanan);
        for ($i = 0; $i < $N; $i++) {
            echo($makanan[$i]. " ");
        }
    }
}
?>
</body>
</html>
