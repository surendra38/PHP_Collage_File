<!-- 37- Write a PHP script that accepts a temperature value in Celsius (C) through a Web form and converts it to the Fahrenheit (F)
scale. The conversion formula to use is: F = (9/5) * C + 32 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pg37.php" method="post">
     <input type="number" name="celcius" placeholder="enter a number" required>
     <input type="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['celcius']))
{
 $c=$_POST['celcius'];
 $f = ((9/5) * $c) + 32;
 echo "the temperature in fahrenheit is ".$f; 
}
?>