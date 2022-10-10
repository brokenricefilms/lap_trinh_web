// BUG: fix php render img
// using for each to get array
<style>
table {
    border: 2px solid black;
}
</style>
<?php
$danh_sach_sach = [];
$danh_sach_sach[] = ["sach_1", "ahihi", "./img/avata.jpeg", 100000];
$danh_sach_sach[] = ["sach_2", "ahiho", "./img/avata.jpeg", 150000];
$danh_sach_sach[] = ["sach_3", "ahiha", "./img/avata.jpeg", 160000];
$danh_sach_sach[] = ["sach_4", "ahihu", "./img/avata.jpeg", 170000];
echo "<img src='$danh_sach_sach[0][2]'>";
?>

<table style="boder: 2px">
<tr>
    <th>STT</th>
    <th>Tên sách</th>
    <th>hình</th>
    <th>giá</th>
</tr>
</table>
