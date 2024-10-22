<?php

$telefonos = [
    ["modelo" => "iPhone 12", "precio" => 1000],
    ["modelo" => "Samsung Galaxy S21", "precio" => 900],
    ["modelo" => "Google Pixel 5", "precio" => 800],
    ["modelo" => "OnePlus 9", "precio" => 750],
    ["modelo" => "Xiaomi Mi 11", "precio" => 700],
];


echo "Arreglo inicial:\n";
print_r($telefonos);


array_push($telefonos, ["modelo" => "Sony Xperia 1", "precio" => 850]);
array_push($telefonos, ["modelo" => "Huawei P40", "precio" => 650]);


usort($telefonos, function($a, $b) {
    return $a['precio'] - $b['precio'];
});


echo "Arreglo ordenado:\n";
print_r($telefonos);
?>
