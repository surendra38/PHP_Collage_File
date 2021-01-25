<!-- 30- Write a PHP script that creates the following table using for loops. Add cellpadding="2px" and cellspacing="1px" to the
table tag -->

<html>
<head><title>pg30</title>
<style>
#tb{
    margin-left:auto;
    margin-right:auto;
}
</style></head>
<body>
 
  <table id="tb" border="2px" cellspacing="2px" cellpadding="1px">
  <?php
  for($i=1;$i<=6;$i++)
  {
      ?>
      <tr>
      <?php
      for($j=1;$j<=5;$j++)
      {
          ?>
          <td>
          <?php
          echo $i."*".$j."=".$i*$j;
          ?>
          </td>
          <?php
      }
      ?>
      </tr>
      <?php
  }
  ?>
  
  </table>
 
</body>
</html>
