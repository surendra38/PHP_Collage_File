<!-- 24- Write a PHP function to print sum of digits. -->
<html>
<head><title>pg24</title></head>
<body>
<form action="pg24.php" method="post">
<div><input type="number"  name="num" placeholder="enter a number" required></div>
<div><input type="submit"></div>
</form>
</body>
</html>
<?php
if(isset($_POST['num']))
{
    $n=$_POST['num'];
    $sum=0;
    while($n!=0)
    {
        $sum=$n%10+ $sum;
        $n=(int)$n/10;
    }
    echo "sum is ".$sum;
}
?>