<!-- 15- Write a PHP script to find the maximum of three numbers. -->
<html>
<head>
<title>pg15</title>
<style>
#fm{
    text-align:center;
}
</style>
</head>
<body>
 <div id="fm">
 <form action="pg15.php" method="post">
  <div><input type="number" name="n1" placeholder="enter number 1" required></div>
  <div><input type="number" name="n2" placeholder="enter number 2" required></div>
  <div><input type="number" name="n3" placeholder="enter number 3" required></div>
  <input type="submit" value="find maximum">
 </form>
 </div>
</body>
</html>

<?php
if(isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['n3']))
{
 $n1=$_POST['n1'];
 $n2=$_POST['n2'];
 $n3=$_POST['n3'];
 if($n1>$n2 && $n1>$n3)
 echo $n1." is maximum";
 else if( $n2>$n1 && $n2>$n3)
 echo $n2." is maximum";               
 else if( $n3>$n1 && $n3>$n2)
 echo $n3." is maximum";
 else 
 echo "any or every number is equal to any or every other ";

}
?>