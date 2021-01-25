<!-- 18- Write a PHP script to print the pattern as follows:
12345
1234
123
12
1 -->
<?php

for($i=5;$i>=1;$i--)
{
 for($j=1;$j<=$i;$j++)
 {
    echo "$j";
 }
 echo "<br>";
}
?>