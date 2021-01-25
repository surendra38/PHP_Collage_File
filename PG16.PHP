<!-- 16- Write a PHP script to know the number of 
days in a month using SWITCH. E.g. if input is 1 display no of days=31,2 display 
no. of days =28/29,etc -->
<html>
<head><title>pg16.php</title>
<style>
#fm{text-align:center;}
</style></head>
<body>
 <div id="fm">
  <form action="PG16.PHP" method="post">
   <input type="number" name="month" placeholder="enter the month number">
   <input type="submit">
  </form>
 </div> 
</body>
<html>

<?php
if(isset($_POST['month']))
{
    $m=$_POST['month'];
    switch($m)
    {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            echo "number of days=31";
            break;

        case 4:
        case 6:
        case 9:
        case 11:
            echo "number of days=30";
            break;
        
        case 2:
            echo "number of days=28/29";
            break;

        default:
            echo "Sorry! this month number cannot exist :(";
        
    }
}
?>
