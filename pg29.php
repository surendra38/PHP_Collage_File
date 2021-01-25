<!-- 29- Write PHP script to create a table with dimension 3x3. Display row number and column number of each cell. (Using nested loops) -->
<html>
<head><title>pg29</title>
<style>
#tb{
    margin-left:auto;
    margin-right:auto;
}
</style></head>
<body>
 
  <table id="tb" border="2px" cellspacing="20px" cellpadding="5px">
  <?php
  for($i=0;$i<3;$i++)
  {
      ?>
      <tr>
      <?php
      for($j=0;$j<3;$j++)
      {
          ?>
          <td>
          <?php
          echo $i.",".$j;
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
