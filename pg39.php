<!-- - Scoutmasters everywhere: a Web tool that can automatically assign Scouts to the correct tent during camping expeditions,
on the basis of their age. This application presents Scouts with a Web form into which they can enter their age; it then assigns
them to one of four tents—Red, Green, Blue, and Black—with other Scouts of approximately the same age -->
<html>
    <head><title>pg39</title>
    <style>
        form{
            margin-top:100px;
        }
    </style>
</head>
<body>
    <form action="pg39.php" method="post" ALIGN="center">
        <input type="number" name="age" placeholder="enter your age">
        <input type="submit" value="click me">
    </form>
</body>
</html>
<?php
if(isset($_POST['age']))
{
    $age=$_POST['age'];

    if($age>=10 && $age <15)
    {
        echo "<h3>you are assigned red tent! Godspeed!</h3>";
    }
    else if($age>=15 && $age <18)
    {
        echo "<h3>you are assigned green tent! Godspeed!</h3>";
    }
    else if($age>=18 && $age <20)
    {
        echo "<h3>you are assigned blue tent! Godspeed!</h3>";
    }

    else if($age>=20 && $age <25)
    {
        echo "<h3> you are assigned black tent! Godspeed! </h3>";
    }

    else
    {
        echo "<h2>you need to see the scoutmaster</h2>";
    }
}
?>