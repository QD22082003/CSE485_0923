<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];


$a = array_sum($numbers) / count($numbers);


$g = [];
foreach ($numbers as $number) {
if ($number > $a) {
$g[] = $number;
}
}


$mtb = [];
foreach ($numbers as $number) {
if ($number <= $a) {
$mtb[] = $number;
}
}


echo "Giá trị trung bình của mảng: $a<br>";
echo "Các số lớn hơn giá trị trung bình: " . implode(', ', $g) . "<br>";
echo "Các số nhỏ hơn hoặc bằng giá trị trung bình: " . implode(', ', $mtb);