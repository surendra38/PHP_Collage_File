<!-- 14- Write a PHP script to whether the year is leap year or not. -->
<html>
<head>
<title>pg14
</title>
<style>
#fm{
    text-align:center;
}
</style>
</head>
<body>
 <div id="fm">
  <form action="pg14.php" method="post" >
  <div> <input type="number" placeholder="enter a year" name="year" required></div>
  <input type="submit">
 </div>
</body>
</html>

<?php
if(isset($_POST['year']))
{ 
    $y=$_POST['year'];
    $l=1;
    if($y%4==0)
    {
        if($y%100==0 && $y%400!=0)
        $l=0;
    }
    if($l==1)
    echo "the given year ".$y." is a leap year";
    else
    echo "the given year ".$y." is not a leap year";
}
?>