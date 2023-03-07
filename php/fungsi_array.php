<?php

declare(strict_types=1);

use function PHPSTORM_META\type;

/**
 * @param "tambah" | "bagi" $mode
 */
function hitung(int $a, int $b, string $mode): int {
    return $a + $b;
}

echo hitung(1, 3, "kurang") . "\n";

/**
 * @var Array<int | string> $arr
 */
$arr = [1, 2, 3, 4, 4.5];
echo $arr[count($arr)-1] . "\n";

$file = [
    [
        "judul" => "Neko",
        "data" => [
            1, 2, 3, 4
        ]
    ]
];

echo "Neko";
echo "Jara";