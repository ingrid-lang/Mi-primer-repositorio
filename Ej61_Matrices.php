
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej61 - Matrices</title>
    <style>

</head>
<body>
    <h1>61.- Matrices A, B y C</h1>

    <?php
    // MatrizA: valores de 10 en 10 iniciando en 100
    $matrizA = [];
    $valorA = 100;
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $matrizA[$i][$j] = $valorA;
            $valorA += 10;
        }
    }

    // MatrizB: valores de 20 en 20 iniciando en 500
    $matrizB = [];
    $valorB = 500;
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $matrizB[$i][$j] = $valorB;
            $valorB += 20;
        }
    }

    // MatrizC: suma de A y B 
    $matrizC = [];
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $matrizC[$i][$j] = $matrizA[$i][$j] + $matrizB[$i][$j];
        }
    }


