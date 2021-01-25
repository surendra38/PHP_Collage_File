<!-- 23- Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator. -->
<html>
<head><title>pg22</title>
<head>
<body>
 <form action="pg23.php" method="post">
 <div><input type="number" name="n1" placeholder="enter a number" required></div>
 <input type="submit">
</body>
</html>

<?php
if(isset($_POST['n1']))
{
    $n=$_POST['n1'];
    echo "<br>";
    echo ($n>30? $n.' is greater than 30' : ($n>20? $n." is greater than 20" : ($n>10 ? $n." is greater than 10": $n." is less than  or equal to 10"))); 
}
?>
