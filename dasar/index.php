<!-- VARIABLE -->
<?php 
$txt = "Variable";
$x = 6;
$y = 10.6;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>
<br><br>
<!-- IF ELSE -->
<?php
$t = 13;

if ($t < 20) {
  echo "kurang dari 20!";
} else {
  echo "lebih dri 20!";
}
?>
<br><br>
<!-- SWITCH -->
<?php
$favcolor = "blue";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
<br><br>
<!-- LOOP FOREACH -->
<?php  
$buah = array("apel", "anggur", "kelengkeng", "nanas"); 

foreach ($buah as $value) {
  echo "$value <br>";
}
?>  
<br><br>
<!-- FUNCTIONS -->
<?php
function writeMsg($nama) {
  echo "FUNCTIONS!  = $nama";
}

writeMsg("ninis"); // call the function
?>
<br><br>
<!-- ARRAY -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<br>
<br>
<!-- date in time -->
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>
<br><br>
<!-- php oop -->
<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>
<br><br>
<!-- php construktor -->
<?php 
class komputer
{
  public $prosesor;
  public $memory;
  public $ram;
  public function __construct($prosesor = "prosesor", $memory = "memory", $ram = "ram")
  {
    $this->prosesor = $prosesor;
    $this->memory = $memory;
    $this->ram = $ram;
  }
  public function getData()
  {
    return "$this->prosesor | $this->memory | $this->ram";
  }
}
$komputer1 = new komputer("Core i7", "225 GB", "8 GB");
$komputer2 = new komputer("Core i9", "500 GB");
echo "Spek Komputer Sekolah : " . $komputer1->getData();
echo "<br/>";
echo "<br/>";
echo"Spek Komputer Rumah : " . $komputer2->getData();
?>
<br><br>

<!-- php destruktor -->
<?php
class product 
{
  public $ram;
  public function __construct($ram = "RAM"){
    $this->ram = $ram;
  }
   function __destruct()
    {
      echo "Ram komputer {$this->ram}";
    }
}
$komputer1 = new product('255 GB');
?>

<br><br>
<!-- SESION -->
<?php
session_start();
echo'Id user saya adalah ' . $_SESSION['logged_in_user_id'];
echo '<br>';
echo'Username saya adalah ' . $_SESSION['logged_in_user_name'];
?>
