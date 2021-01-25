<!-- 31- Write a PHP script using nested for loop that creates a chess board as shown below -->
<html>
<head><title>pg31</title>
<style>
#tb{
    margin-left:auto;
    margin-right:auto;
}
</style></head>
<body>
 
  <table id="tb" border="2px"  cellpadding="20px">
  <?php
  
  for($i=1;$i<=8;$i++)
  {
      ?>
      <tr>
      <?php 
      for($j=1;$j<=8;$j++)
      {
        $s=($i+$j)%2;
          if ($s==0)
          {
          ?>  
          <td height="100px " width="70px" bgcolor="black">
            </td>
          <?php
          }
          
          else
          {
              ?>
            <td height="100px " width="70px" bgcolor="white">
            </td>
        <?php
          }
         
      }
      ?>

      </tr>
      <?php
  }
  ?>
  
  </table>
 
</body>
</html>