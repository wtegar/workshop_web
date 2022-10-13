<?php
function maximum($x, $y)
{
 $max = $x; 
 if ($y> $max) { 
  $max = $y;
 } 
 echo "nilai terbesarnya adalah ".$max;
}
maximum(111, 143);
?>