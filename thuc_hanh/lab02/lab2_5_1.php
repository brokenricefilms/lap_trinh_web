<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
<form action="lab2_5_1.php" method="post">
a: <input type="number" name"a"><br>
b: <input type="number" name"b"><br>
<input type="submit">
</form>

<?php
$a = $_POST['a'] + 0;
$b = $_POST['b'] + 0;
$phan_nguyen=(int) ($a/$b);
$phan_du=$a%$b;
echo "phan nguyen $phan_nguyen <br>";
echo "phan du $phan_du";
?>
</body>
</html>