<!-- 20- Create a simple HTML form and accept the user name and display the name through PHP echo statement using GET method. -->
<html>
<head><title>pg20</title>
<style>
#fm{text-align:center;}
</style></head>
<body>
 <div id="fm">
 <form action="pg20.php" method="get">
 <div><input type="text" name="username" placeholder="enter a name here" required><div>
 <input type="submit">
 </form></div>
</body>
</html>

<?php
if(isset($_GET['username']))

{
    $name=$_GET['username'];
    echo "the user name is ".$name;
}
?>