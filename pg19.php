<!-- 19- Create a function with name fun which calculates product of two numbers. -->
<html>
<head>
<title>pg19</title>
<style>
#fm{text-align:center;} 
</style>
</head>
<body>
    <div id="fm">
    <form action="pg19.php" method="post">
     <div><input type="number" placeholder="enter number 1" name="num1" required></div>
     <div><input type="number" placeholder="enter number 2" name="num2" required></div>
     <div><input type="submit"></div>
    </form>
    </div>
</body></html>
<?php
if(isset($_POST['num1'])&& isset($_POST['num2']))
$n1=$_POST['num1'];
$n2=$_POST['num2'];
{
 function fun($n1,$n2)
 {
    return $n1*$n2;
 }
 echo "the product of ".$n1." and ".$n2." is ".fun($n1,$n2);
}

?>