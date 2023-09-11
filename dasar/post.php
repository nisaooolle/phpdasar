<!DOCTYPE html>
<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nama: <input type="text" name="fname">
  <br>
  Umur: <input type="text" name="umur">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    $umur = $_POST['umur'];
    if (empty($name) && empty($umur)) {
        echo "Input terlebih dahulu";
    } else {
        echo "$name <br> $umur";
    }
}
?>

</body>
</html>