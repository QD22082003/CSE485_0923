<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$nguoi = ['Anh', 'Sơn', 'Thắng', 'tôi'];
$result = [];

foreach ($arrs as $key => $color) {
    $result[] = "Màu $color là màu yêu thích của {$nguoi[$key]}";
}

$final_string = implode(', ', $result);
echo $final_string;
