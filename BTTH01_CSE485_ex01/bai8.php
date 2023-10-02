<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$minLength = PHP_INT_MAX;
$maxLength = 0;
$minString = '';
$maxString = '';

foreach ($array as $str){
    $length = strlen($str);
    if($length<$minLength){
        $minLength = $length;
        $minString = $str;
    }
    if ($length>$maxLength){
        $maxLength = $length;
        $maxString = $str;
    }
}

echo "Chuỗi lớn nhất là '$maxString', độ dài = $maxLength<br>";
echo "Chuỗi bé nhất là '$minString', độ dài = $minLength<br>";
?>
