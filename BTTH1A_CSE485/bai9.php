<?php
function convertToLowercase($array)
{
    $result = [];

    foreach ($array as $element) {
        if (is_string($element)) {
            $convertedElement = strtolower($element);
            $result[] = $convertedElement;
        } else {
            $result[] = $element;
        }
    }

    return $result;
}
$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'B', 'C', 'E'];
$arr3 = ['a', 0, null, false];

$convertedArr1 = convertToLowercase($arr1);
$convertedArr2 = convertToLowercase($arr2);
$convertedArr3 = convertToLowercase($arr3);

print_r($convertedArr1);
print_r($convertedArr2);
print_r($convertedArr3);
echo "<br><br>";
?>