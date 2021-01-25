<!--10- Write a PHP script to check whether two numbers are equal or not.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 style="text-align:center">Here we will check whether two numbers are equal or not</h2>

    <form action="PG_10_.php" method="post" align="center">
    <div>Enter number 1<input type="number" name="num1" required></div>
    <div>Enter number 2<input type="number" name="num2" required></div>
    <input type="submit">
    </form>
</body>
</html>
<?php

if(isset($_POST['num1']) && (isset($_POST['num2'])))
{
 $n1=$_POST['num1'];
 $n2=$_POST['num2'];
 
  echo "number 1 is ".$n1." and number two is ".$n2."<br>";
  if($n1==$n2)
  echo "the provided numbers are equal";
  else
  echo "the provided numbers are not equal";
}
 ?>