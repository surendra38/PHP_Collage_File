<?php
$r=$_POST['r'];
$g=$_POST['g'];
$b=$_POST['b'];

echo "red :".$r."<br>";
echo "green :".$g."<br>";
echo "blue :".$b."<br>";

$rgb=$r.','.$g.','.$b;
echo $rgb;
?>
<html>
    <head><title>background color</title>
    <style>
        body{background-color:rgb(<?php echo $rgb?>)}
        </style>

</head>
<body >
</body>
</html>


