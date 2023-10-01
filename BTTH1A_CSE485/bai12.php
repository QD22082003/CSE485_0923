<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

$firstElement = reset($numbers);
$lastElement = end($numbers);

// Tìm số lớn nhất
$minValue = min($numbers);
$maxValue = max($numbers);
$total = array_sum($numbers);

// Sắp xếp mảng theo chiều tăng, giảm giá trị
$ascendingSort = $numbers;
asort($ascendingSort);
$descendingSort = $numbers;
arsort($descendingSort);

// Sắp xếp mảng theo chiều tăng, giảm key
ksort($numbers);
krsort($numbers);

// Hiển thị kết quả
echo "Phần tử đầu tiên: $firstElement<br>";
echo "Phần tử cuối cùng: $lastElement<br>";
echo "Số nhỏ nhất: $minValue<br>";
echo "Số lớn nhất: $maxValue<br>";
echo "Tổng các giá trị: $total<br>";

echo "Sắp xếp mảng tăng dần theo giá trị:<br>";
print_r($ascendingSort);

echo "Sắp xếp mảng giảm dần theo giá trị:<br>";
print_r($descendingSort);

echo "Sắp xếp mảng tăng dần theo key:<br>";
ksort($numbers);
print_r($numbers);

echo "Sắp xếp mảng giảm dần theo key:<br>";
krsort($numbers);
print_r($numbers);
