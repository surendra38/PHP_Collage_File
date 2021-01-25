<!-- 20- Create a simple HTML form and accept the user name and display the name through PHP echo statement using POST method. -->
<html>
<head><title>pg21</title>
<style>
#fm{text-align:center;}
</style></head>
<body>
 <div id="fm">
 <form action="pg21.php" method="post">
 <div><input type="text" name="username" placeholder="enter a name here" required><div>
 <input type="submit">
 </form></div>
</body>
</html>

<?php
if(isset($_POST['username']))

{
    $name=$_POST['username'];
    echo "the user name is ".$name;
}
?>