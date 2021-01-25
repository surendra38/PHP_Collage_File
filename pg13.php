<!-- 13- Write a PHP script to check whether the number is positive/negative or zero. -->
<html>
<head>
<title>pg13
</title>
<style>
 #fm{text-align:center;}
</style>
</head>
<body>
<div id="fm">
<form action="pg13.php" method="post">
<div> <input type="number" name="num1" required placeholder="enter a number"></div>
<input type="submit" value="check">
</div>
</form>
</body>
<html>
<?php
if(isset($_POST['num1']))
{
    $n=$_POST['num1'];
    if($n>0)
    echo "the number ".$n." is +ve";
    else if($n<0)
    echo "the number ".$n." is -ve";
    else
    echo "the number ".$n." is 0";

}
?>