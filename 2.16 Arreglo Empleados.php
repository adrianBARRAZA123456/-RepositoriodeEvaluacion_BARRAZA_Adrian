
<html>
<head>
	<title></title>
</head>
<body>
<?php

// Crear un arreglo de 5 empleados y su sueldo mensual
$empleados = [
    "yo mismo" => 300000000000000,
    "una mujer" => 1500,
    "Luis" => 4000000,
    "lego negro" => 3500,
    "NOSE" => 45000,
];


// Imprimir el arreglo
echo "Empleados y sus sueldos:\n";
foreach ($empleados as $nombre => $sueldo) {
    echo "$nombre: $sueldo\n";
}


echo "<br>";
// Ordenar el arreglo por sueldo

echo "<br>";
asort($empleados);

echo "Empleados y sus sueldos:\n";
foreach ($empleados as $nombre => $sueldo) {
    echo "$nombre: $sueldo\n";
}
echo "<br>";
// Agregar 2 empleados más con su sueldo
$empleados += [
    "Juan" => 2000,
    "CACA" => 7000,
];

echo "<br>";
// Imprimir el nuevo arreglo
asort($empleados);
echo "\nEmpleados después de agregar:\n";
foreach ($empleados as $nombre => $sueldo) {
    echo "$nombre: $$sueldo\n";
}
?>



</body>





