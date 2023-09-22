<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

$valueB = $a['b']['o']['b'] . '<br>';
echo $valueB; // Kết quả sẽ là 3

$valueC = $a['a']['c'] . '<br>';;
echo $valueC; // Kết quả sẽ là 1

$infoA = $a['a'];
echo $infoA;
