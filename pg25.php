<!-- 25- Write a PHP function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument -->
<html>
<head><title>pg25</title></head>
<body>
 <form action="pg25.php" method="post">
  <div><input type="number" name="num" placeholder="enter a number" required></div>
  <div><input type="submit"></div>
 </form>
</body>
</html>

<?php
if(isset($_POST['num']))
{
    $n=$_POST['num'];
    
    function fact($nn)
    { 
        $p=1;
        for($i=1;$i<=$nn;$i++)
        {
            $p=$p*$i;
        }
        return $p;
    }

    echo "the factorial of ".$n." is ".fact($n);
}
?>