<?php
declare(strict_types=1);
$hari = 8;
$denda = 0;
$MAX_DENDA = 10000;

$total_denda = $hari * $denda;
$map = [1, 2, 3, 4, 5];

// if (!$total_denda){
//     echo "Terima Kasih\n";
// } elseif ($total_denda > $MAX_DENDA){
//     echo "Denda terlalu banyak";
// } else {
//     echo "Denda anda = " . $total_denda;
// }

// for ($i=0; $i <= 10; $i++) {
//     echo $i . "\n";
// }

// $x = 0;
// while (true) {
//     echo $x . "\n";
//     $x++;
//     if ($x > 10) break;
// }


$arr = ["Neko", "Poi", "is", "good"];

foreach ($arr as $key => $value) {
    echo "key" . $key . " adalah " . $value . "\n";
    sleep(1);
}
