/*PHP Case Sensitivity
In PHP, NO keywords (e.g. if, else, while, echo, etc.), classes, functions,
and user-defined functions are case-sensitive.*/

<!DOCTYPE html>
<html>
<body>

<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>

</body>
</html>


/*output
only the first statement will display the value of the $color variable!
This is because $color, $COLOR, and $coLOR are treated as three different variables

My car is red
My house is
My boat is*/
