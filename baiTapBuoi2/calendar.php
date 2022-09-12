<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title></title>
    <style>
      td {
        width: 25px;
        height: 25px;
      }
    </style>
  </head>
  <body>
<table border="1">
<tr>
    <td>S</td>
    <td>M</td>
    <td>T</td>
    <td>W</td>
    <td>T</td>
    <td>F</td>
    <td>S</td>
</tr>
<?php
$calendarRow = 6;
$calendarColumn = 7;
$calendarBoxSize = $calendarColumn * $calendarRow;

echo "<tr>";
for ($i = 1; $i <= $calendarBoxSize; $i++) {
    $count;
    $count++;
    if ($i <= 4 || $i - 4 > 30) {
        echo "<td>&nbsp;</td>";
    } else {
        $ok = $i - 4;
        echo "<td>$ok</td>";
    }
    if ($count == $calendarColumn) {
        echo "</tr>";
        echo "<tr>";
        $count = 0;
    }
}
echo "</tr>";
?>

</table>
  </body>
</html>
