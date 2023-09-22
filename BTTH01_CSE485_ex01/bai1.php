<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

function tinhTong($arr) {
    return array_sum($arr);
}

function tinhTich($arr) {
    return array_product($arr);
}

function tinhHieu($arr) {
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $result -= $arr[$i];
    }
    return $result;
}

function tinhThuong($arr) {
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $result /= $arr[$i];
    }
    return $result;
}

$tong = tinhTong($arrs);
$tich = tinhTich($arrs);
$hieu = tinhHieu($arrs);
$thuong = tinhThuong($arrs);

echo "Tổng các phần tử = " . implode(' + ', $arrs) . " = $tong <br>";
echo "Tích các phần tử = " . implode(' * ', $arrs) . " = $tich <br>";
echo "Hiệu các phần tử = " . implode(' - ', $arrs) . " = $hieu <br>";
echo "Thương các phần tử = " . implode(' / ', $arrs) . " = $thuong <br>";