<!-- PERCABANGAN -->
<!-- if statement -->
<?php
$t = date("H");
if ($t < "20") {
    echo "Have a good day!";
}
?>

<!-- if else statement -->
<?php
$t = date("H");
if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

<!-- id elseif else statemnet -->
<?php
$t = date("H");
if ($t < "10") {
    echo "Have a good morning!";
} elseif($t < 20) {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>


<!-- switch statement -->
<?php
$favcolor = "red";
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
        echo "Your favorite color is red!";
}
?>



<!-- PERULANGAN -->
<!-- while -->
<?php
$x = 1;
while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
?>

<!-- do while -->
<?php
$x = 1;
do {
    echo "The number is: $x <br?";
    $x++;
} while ($x <= 5);
?>

<!-- for -->
<?php
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
?>

<!-- for each -->
<?php
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "$value <br>";
}
?>


<!-- ARRAY -->

<!-- mendeklarasikan dan mengakses array -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like" . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>

<!-- mengetahui panjang array -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>

<!-- mengakses array melalui perulangan -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
for ($x = 0; $x < $arrlength; $x++){
    echo $cars[$x];
    echo "<br>";
}
?>


<!-- mendeklarasikan associative array dan mengaksesnya -->
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is" . $age['Peter'] . " years old.";
?>


<!-- mengakses semua nilai associative array dengan perulangan -->
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as  $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>



<!-- array multi dimensi -->
<?php
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>". $cars[$row][$col]."</li>";
    }
    echo "</ul>";
}
?>