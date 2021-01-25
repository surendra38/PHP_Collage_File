<!-- 32- Write a PHP program to generate and display the first n lines of a Floyd triangle.
1
2 3
4 5 6
7 8 9 10 -->
<html>
<head>
<title>pg32</title>

</head>
<body>

 <div >
 <form action="pg32.php" method="post">
 <div><input type="number" name="num1" placeholder="enter the value of n" required></div>
 <div><input type="submit"></div>
 </form>
 <div> 
</body>
</html>

<?php
if(isset($_POST['num1']))
{
    $n=$_POST['num1'];
    $a=1;
    for($i=1;$i<=$n;$i++)
    {
     for($j=1;$j<=$i;$j++)
     {
       echo $a++." ";
     }
     echo "<br>";
    }
}
?>
