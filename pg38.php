<?php
if(isset($_POST['first']))
{
  echo "your name is =>".$_POST['first']."<br>";
}

if(isset($_POST['second']))
{
  echo "your description =>".$_POST['second']."<br>";
}

if(isset($_POST['third']))
{
  echo "your password is =>".$_POST['third']."<br>";
}

if(isset($_POST['myclass']))
{
  echo "your class is =>".$_POST['myclass']."<br>";
}

if(isset($_POST['gender']))
{
  echo "your gender is ".$_POST['gender']."<br>";
}

if(isset($_POST['first']))
{
  echo "your interests are ";
  $arr=$_POST['year'];
  foreach ($arr as $value){
    echo $value." ";
  }
}
?>