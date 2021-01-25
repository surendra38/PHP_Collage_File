<!-- 27- Write a PHP script to check whether a number is an Armstrong number or not. Return true if the number is Armstrong
otherwise return false -->
<html>
<head><title>pg27</title>
<style>#hell{
    text-align:center;
    }</style>
</head>
<body>
<div id="hell">
  <form action="pg27.php" method="post">
  <div><input type="number" name="num" placeholder="enter number" required></div>
  <div><input type="submit"></div>
  </form>
</div>
</body>
</html>

<?php
if(isset($_POST['num']))
{
    $n=$_POST['num'];
    $m=$n;
    $s=0;
    while($n!=0)
    {
     $s=$s + pow($n%10,3);
     $n=(int)$n/10;
    }
    echo ($s==$m)? $m." is an armstrong number": $m." is not an armstrong number ";
 
}
?>