<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title></title>
    <style>
      td {
        width: 25px;
        height: 25px;
      }
      table {
        width: auto;
        height: auto;
      }
    </style>
  </head>
  <body>
<table border="1">
    <?php
    $row = 4;
    $column = 6;
    for ($i = 0 ; $i <= $row ; $i++) {
    echo "<tr>";
    for ($j = 0; $j <= $column ; $j++) {
    $tong = $i + $j;
    if ($tong % 2 == 0 ) {
    echo "<td >&nbsp;</td>";
    } else {
    }
    echo "<td style=\"background-color=\"black\";color=\"white\"\">&nbsp;</td>";
    }
    echo "</tr>";
    }
    ?>
</table>
  </body>
</html>
