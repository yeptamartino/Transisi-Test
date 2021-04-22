<?php
$array = array(72, 65, 73, 78, 75, 74, 90, 81, 87, 65, 55, 69, 72, 78, 79, 91, 100, 40, 67, 77, 86);

$average = array_sum($array) / count($array);

$max = (max($array));

$min = (min($array));

echo 'Nilai Rata-Rata ' . $average . '/n';

echo 'Nilai Tertinggi ' . $max . '/n';

echo 'Nilai Terendah ' . $min;
?>