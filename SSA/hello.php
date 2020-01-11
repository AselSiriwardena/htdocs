<!DOCTYPE html>
<html>
<body>

<h1> PHP page</h1>

<?php
for ($x = 0; $x <= 10; $x=$x+2) {
echo "The number is: $x <br>";
}

$deserts = array
(
array("banana",50),
array("cake",150),
array("chease",53),
array("ice cream",120)
);

for ($row = 0; $row < 4; $row++) {
echo "<p><b>Row number $row</b></p>";
echo "<ul>";
for ($col = 0; $col < 2; $col++) {
echo "<li>".$deserts[$row][$col]."</li>";
}
echo "</ul>";
}

?>

</body>
</html>