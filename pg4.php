<!--
4- Write PHP script to perform below mentioned calculation:
 Z= 8.8(a+b) 2 / (c- 0.5)
 ---------------------
 (a+b) * (1/m)
-->
<?php
$a=10;
$b=20;
$c=30;
$z=40;
$m=50;
$z=(8.8*($a+$b)*2)/($m*($c-0.5)*($a+$b));
echo $z;
?>