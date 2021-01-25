<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 style="text-align:center">Here we will check whether the provided number is even or odd</h2>

    <form action="pg11.php" method="post" align="center">
    <div>Enter number 1<input type="number" name="num1" required></div>
   
    <input type="submit">
    </form>
</body>
</html>

<?php

 if(isset($_POST['num1']))
 {

  $n1=$_POST['num1'];
  echo "number is ".$n1."<br>";

  $r=$n1%2;

  if($r == 0)
  echo "the provided number is even";
  else
  echo "the provided number is not even";
 }

?>