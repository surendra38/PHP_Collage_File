<!-- 17- Write a PHP script to find whether a number is prime or not. -->
<html>
<head>
<title>pg17
</title>
<style>
#fm{text-align:center;}
</style>
</head>
<body>
<div id="fm">
 <form action="pg17.php" method="post">
  <div><input type="number" name="n1" placeholder="enter a number here" required><div>
  <input type="submit">
 </form>
 </div>
</body>
</html>

<?php
if(isset($_POST['n1']))
{
 $n=$_POST['n1'];
 $p=1;
 if($n==1)
 $p=0;
 $m=(int)$n/2;
 for($i=2;$i<=$m;$i++)
 {
     if($n%$i==0)
     {
      $p=0;
      break;
     }
 }
 if($p==0)
 echo "not prime";
 if($p==1)
 echo "the given number is prime";
}
?>