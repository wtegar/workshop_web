<?php
$m1 = array(
array(1,1,1),
array(2,2,2),
array(3,3,3)
);
$m2 = array(
array(3,3,3),
array(2,2,2),
array(1,1,1)
);
for ($i = 0; $i < count($m1); $i++):
for ($j = 0; $j < count($m1[$i]); $j++):
echo $m1[$i][$j]+$m2[$i][$j];
echo ",";
endfor;
echo "<br>";
endfor;
?>