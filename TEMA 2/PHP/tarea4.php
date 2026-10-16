
<!DOCTYPE HTML>
<html>
<head>
    <title>
</title>
</head>
<body>
<?php

echo "CALCULADORA CIENTÍFICA" . "<br>";

$a = 15;
$a = 3;

echo "OPERADORES ARITMÉTICOS PRINCIPALES" . "<br>";
echo "Suma " . ($a + $b) . "<br>";
echo "Resta " . ($a - $b) . "<br>";
echo "Multiplicación " . ($a * $b) . "<br>";
echo "División " . ($a / $b) . "<br>";

echo "OPERADORES ARITMÉTICOS EXTRA " . "<br>";
echo "Resto " . ($a % $b) . "<br>";
echo "Potencia " . ($a ** $b) . "<br>";
echo "Negación " . (-$a) .  (-$b) . "<br>";
echo "Distinto " . ($a <> $b) . "<br>"; //También podría hacerse con !=

echo "ASIGNACIÓN " . "<br>";

echo "Asignación " . ($a = $b) . "<br>";
echo "Suma Asignación " . ($a += $b) . "<br>" ;
echo "Resta Asignación " . ($a -= $b) . "<br>";
echo "Multiplicación Asignación " . ($a *= $b) . "<br>";
echo "División Asignación " . ($a /= $b) . "<br>";
echo "Resto Asignación " . ($a %= $b) . "<br>";
echo "Potencia Asignación " . ($a **= $b) . "<br>";
echo "Concatenación " . ($a .= $b) . "<br>";

echo "INCREMENTO Y DECREMENTO " . "<br>";
echo "Preincremento " . (++$a) . (++$b) . "<br>";
echo "Postincremento " . ($a++) . ($b++) . "<br>";
echo "Predecremento " . (--$a) . (--$b) . "<br>";
echo "Postdecremento " . ($a--) . ($b--) . "<br>";

echo "COMPARACIÓN " . "<br>";

echo "Igual" . ($a == $b) . "<br>";
echo "Identico" . ($a === $b) . "<br>";
echo "Diferente" . ($a != $b) . "<br>";
echo "No idéntico" . ($a !== $b) . "<br>";
echo "Mayor que" .  ("$a > $b") . "<br>";
echo "Menor que" .  ("$a < $b") . "<br>";
echo "Mayor o igual que" .  ("$a >= $b") . "<br>";
echo "Menor o igual que" .  ("$a <= $b") . "<br>";

echo "OPERADORES LÓGICOS " . "<br>";

echo "Y " . ($a && $b) . "<br>"; // También puede usarse and
echo "O" . ($a || $b) . "<br>";  // También puede usarse or
echo "XOR" . ($a xor $b) . "<br>";
echo "NOT" . (!$a) . (!$b) .  "<br>";

?>
</body>
</html>