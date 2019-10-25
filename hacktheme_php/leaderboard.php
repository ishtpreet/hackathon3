<?php
include 'config.php';
$que = mysql_query("SELECT * FROM teamdetails WHERE `theme` IS NOT NULL");

?>
<table class="table-striped">
  <thead>
    <tr>
      <th>TeamID</th>
      <th>Theme</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($row = mysql_fetch_array($que)) {
          ?>
        <tr>
          <td>&nbsp;<?php echo $row['teamid']; ?></td>
          <td>&nbsp;<?php echo $row['theme']; ?></td>
        </tr>
      <?php
      } ?>
  </tbody>
</table>
