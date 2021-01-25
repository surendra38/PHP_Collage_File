<!-- 26- Write a PHP function to calculate the factorial of a number using recursion -->
<html>
<head><title>pg26</title></head>
<body>
 <form action="pg26.php" method="post">
  <div><input type="number" name="num" placeholder="enter a number" required></div>
  <div><input type="submit"></div>
 </form>
</body>
</html>

<?php
if(isset($_POST['num']))
{
    function fact($nn)
    {
        if ($nn>1)
        return ($nn*fact($nn-1));
        else
        return 1;
    }
    $n=$_POST['num'];
    echo "the factorial of ".$n." is ".fact($n);
}
?>