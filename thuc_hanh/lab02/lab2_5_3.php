<?php
// https://vi.wikipedia.org/wiki/Ph%C6%B0%C6%A1ng_tr%C3%ACnh_b%E1%BA%ADc_hai
$a=1;
$b=-2;
$c=-9;

$delta;
$delta_phay;
$x_1;
$x_2;

$delta = $b*$b - 4*$a*$c;
$delta_phay = $delta / 4;

if ($delta > 0 && $delta_phay > 0 ) {
  echo "phuong trinh co 2 nghiem la:";
  $x_1 = round((-$b + sqrt($delta)) / (2 * $a), 2);
  $x_2 = round((-$b - sqrt($delta)) / (2 * $a), 2);
  echo "x = $x_1 , $x_2";
} elseif ($delta == 0 && $delta_phay == 0 ) {
  echo "phuong trinh co 1 nghiem la:";
  $x_1 = round(-$b/(2*$a), 2);
  echo "x = $x_1";
} else {
  echo "phuong trinh khong co nghiem thuc";
}
?>