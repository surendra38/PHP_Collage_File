<!-- 28- Write a PHP script to calculate the mod of two given integers without using any inbuilt modulus operator. -->
<html>
<head>
<title>pg28</title>
<style>#hello{text-align:center;}</style>
</head>
<body>
 <div id="hello">
  <form action="pg28.php" method="post">
   <div><input type="number" name="num1" placeholder="enter 1st number" required></div>
   <div><input type="number" name="num2" placeholder="enter 2nd number" required></div>
   <div><input type="submit"></div>
  </form>
 </div>
</body>
</html>

<?php
if(isset($_POST['num1']) && isset($_POST['num2']))
{
    $n1=$_POST['num1'];
    $n2=$_POST['num2'];
    echo "mod is ".$n1%$n2;
}
?>