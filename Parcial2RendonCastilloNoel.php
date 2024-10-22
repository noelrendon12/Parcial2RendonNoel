<?php
// Arreglo inicial de 5 teléfonos con su precio
$telefonos = [
    ["modelo" => "iPhone 12", "precio" => 1000],
    ["modelo" => "Samsung Galaxy S21", "precio" => 900],
    ["modelo" => "Google Pixel 5", "precio" => 800],
    ["modelo" => "OnePlus 9", "precio" => 750],
    ["modelo" => "Xiaomi Mi 11", "precio" => 700],
];

// Imprimir el arreglo inicial
echo "Arreglo inicial:\n";
print_r($telefonos);

// Agregar 2 teléfonos más con su precio usando array_push()
array_push($telefonos, ["modelo" => "Sony Xperia 1", "precio" => 850]);
array_push($telefonos, ["modelo" => "Huawei P40", "precio" => 650]);

// Ordenar el arreglo por precio
usort($telefonos, function($a, $b) {
    return $a['precio'] - $b['precio'];
});

// Imprimir el arreglo ordenado
echo "Arreglo ordenado:\n";
print_r($telefonos);
?>
