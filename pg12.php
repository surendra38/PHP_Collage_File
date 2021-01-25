<!-- 12- Write a PHP script to find the larger of two numbers. -->
<html>
<head>
<title>pg12</title>
<style>
div{text-align:center;}
</style>
</head>
<body>
<div>
 <form action="ph12.php" method="post" >
  <input type="number" placeholder="enter number 1" name="num1"><br>
  <input type="number" placeholder="enter number 2" name="num2"><br>
  <input type="submit">
 </form>
 </div>
</body>
</html>

<?php
if(isset($_POST['num1']) && isset($_POST['num1']))
{
    $n1=$_POST['num1'];
    $n2=$_POST['num2'];
    if($n1>$n2)
    echo "the larger number is ".$n1;
    if($n2>$n1)
    echo "the larger number is ".$n2;


}
?>