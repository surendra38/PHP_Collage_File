<!-- 40- Create a PHP function to calculate GCF and LCM of two numbers -->
<html>
    <head><title>pg40</title>
</head>
<body>
    <form ALIGN="center" action="#" method="post">
        <div><input type="number" name="num1" placeholder="enter first number"></div>
        <div><input type="number" name="num2" placeholder="enter second number"></div>
        <div><input type="submit" value="click for lcm and hcf"></div>
    </form>
</body>
</html>

<?php
if(isset($_POST['num2'])&& isset($_POST['num2']))
{
    $a=$_POST['num1'];
    $b=$_POST['num2'];

    
    if($a<$b)
    {
        $a=$a*$b;
        $b=$a/$b;
        $a=$a/$b;
    }
    $aa=$a;
    $bb=$b;

    $r=100;
    $h=0;
    $l=1;
    while($r!=0)
    {
        $r=$a%$b;
        if($r==0)
        {
         $h=$b;
         break;
        }
        else
        {
            $a=$b;
            $b=$r;
        }
    }
    echo " number 1 is $aa<br> number 2 is $bb<br>hcf is $h<br> lcm is ".(($aa*$bb)/$h);
}
?>