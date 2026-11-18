<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <title>MATRIZ</title> 
</head>
 
   <style>
        .titulo-bonito {
            font-family: 'Pacifico', cursive; 
            color: #ff4d94;                   
            font-size: 36px;                 
            text-shadow: 2px 2px 4px #ffcce0; 
            letter-spacing: 1px;              
        }

table {
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        td {
            border: 2px solid #ff4d94;
            padding: 10px 15px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2 class="titulo-bonito">MATRIZ</h2>

<form method="POST">

<?php

$matriza = array();
$matrizb = array();
$matrizc = array();

$valor=100;
echo "<table>";
echo "<h3>Matriz A </h3>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
     $matriza[$i][$j] = $valor;
        echo "<td>" . $matriza[$i][$j] . "</td>";; 
        $valor+=10;}
    echo "</tr>";}
    echo "</table>";

$valor=500;
echo "<table>";
echo "<h3>Matriz B </h3>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {    
    $matrizb[$i][$j] = $valor;
       echo "<td>" . $matrizb[$i][$j] . "</td>"; 
        $valor+=20;}
    echo "</tr>";}
    echo "</table>";

echo "<h3>Matriz C</h3>";
echo "<table>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        $matrizc[$i][$j] = $matriza[$i][$j] + $matrizb[$i][$j];
        echo "<td>" . $matrizc[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>