<!DOCTYPE html>
<html>
<body>
<?php
$x = 20;
$y = 25;
function myTest() 
{
 global $x, $y;
 $y = $x + $y; 
} 
myTest(); // run function
echo $y; // output the new value for variable $y
?>
</body>
</html>
