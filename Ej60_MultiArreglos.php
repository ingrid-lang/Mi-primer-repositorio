<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Multi Operaciones</title>
</head>
<body>
<h2>MULTI OPERACIONES</h2>
<!-- Formulario de captura -->
<form method="POST" action="">
<?php
// Ciclo para mostrar tres renglones de captura
for ($i = 0; $i < 3; $i++) {
echo "Numeros1:";
echo "<input type='number' name='numeros1[]'>" . " ";
echo "Numeros2:";
echo "<input type='number' name='numeros2[]'>" . " ";
echo "<br><br>";
}
?>
<!-- Botón para guardar y calcular -->
<button type="submit" name="guardar" value="guardar">
Guardar y calcular </button>
</form>

<?php
// Verificar si se presionó el botón Guardar
if (isset($_POST['guardar'])) {
// Guardar los datos en tres arreglos
$numeros1 = $_POST['numeros1'];
$numeros2 = $_POST['numeros2'];
// Variable para el error
$error = "";
// Validar las condiciones
for ($i = 0; $i < 3; $i++) {
if ($numeros1[$i] < 51 || $numeros1[$i] > 99) {
$error = "Error: En Numeros1 solo se pueden teclear del 51 al 99";
}
if ($numeros2[$i] < -50 || $numeros2[$i] > -1) {
$error = "Error: En Numeros2 solo se pueden teclear del -50 al -1";
}
}

if ($error != "") {
// Si hay error, solo mostrar el error
echo "<br><p style='color:red'><b>" . $error . "</b></p>";
} else {
// Declarar los arreglos de resultados
$suma = array();
$resta = array();
$multiplicacion = array();
$division = array();
// Ciclo para realizar los cálculos
for ($i = 0; $i < 3; $i++) {
// Calcular suma
$suma[$i] = $numeros1[$i] + $numeros2[$i];
// Calcular resta
$resta[$i] = $numeros1[$i] - $numeros2[$i];
// Calcular multiplicacion
$multiplicacion[$i] = $numeros1[$i] * $numeros2[$i];
// Calcular division
$division[$i] = round($numeros1[$i] / $numeros2[$i], 2);
}

// Mostrar cada arreglo en su propia tablita, una al lado de la otra
echo "<br>";
echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>Numeros1</th></tr>";
for ($i = 0; $i < 3; $i++) { echo "<tr><td>" . $numeros1[$i] . "</td></tr>"; }
echo "</table>";

echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>Numeros2</th></tr>";
for ($i = 0; $i < 3; $i++) { echo "<tr><td>" . $numeros2[$i] . "</td></tr>"; }
echo "</table>";

echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>Suma</th></tr>";
for ($i = 0; $i < 3; $i++) { echo "<tr><td>" . $suma[$i] . "</td></tr>"; }
echo "</table>";

echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>Resta</th></tr>";
for ($i = 0; $i < 3; $i++) { echo "<tr><td>" . $resta[$i] . "</td></tr>"; }
echo "</table>";

echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>Multiplicacion</th></tr>";
for ($i = 0; $i < 3; $i++) { echo "<tr><td>" . $multiplicacion[$i] . "</td></tr>"; }
echo "</table>";

echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>Division</th></tr>";
for ($i = 0; $i < 3; $i++) { echo "<tr><td>" . $division[$i] . "</td></tr>"; }
echo "</table>";
}
}
?>
</body>
</html>