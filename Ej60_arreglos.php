<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Registro de productos</title> 
</head> 
<body> 
 
   <style>
        .titulo-bonito {
            font-family: 'Pacifico', cursive; 
            color: #ff4d94;                   
            font-size: 36px;                 
            text-shadow: 2px 2px 4px #ffcce0; 
            letter-spacing: 1px;              
        }
    </style>
</head>
<body>
    <!-- 3. Aplicar la clase al título -->
    <h2 class="titulo-bonito">Registro de dos números</h2>
  
    <form method="POST" action=""> 

    <?php 

   
    for ($i = 0; $i < 3; $i++) {
    echo "<label style='color: #ff4d94;'>Número 1: </label>";
    echo "<input type='number' name='numero_1[]' required style='border-color: #ff4d94; color: #ff4d94;'> "; 

    echo "<label style='color: #ff4d94;'>Número 2: </label>";
    echo "<input type='number' name='numero_2[]' required style='border-color: #ff4d94; color: #ff4d94;'> ";
    
    echo "<br><br>";

    } 
    ?> 
 
    <button type="submit" name="guardar" value="guardar" style=color:#ff4d94;> 
    Guardar y calcular </button> 

    <?php 
 
       if (isset($_POST['guardar'])) { 
 
        $num1 = $_POST['numero_1']; 
        $num2 = $_POST['numero_2']; 

      for ($i = 0; $i < 3; $i++) {
        if ($num1[$i] < 45 || $num1[$i] > 99) {
            echo "<p style='color:red;'>Error en la fila " . ($i + 1) . ": El Número 1 debe estar entre 45 y 99.</p>";
            $hay_errores = true;
            continue;
        }

        if ($num2[$i] < -51 || $num2[$i] > -1) {
            echo "<p style='color:red;'>Error en la fila " . ($i + 1) . ": El Número 2 debe estar entre -51 y -1.</p>";
            $hay_errores = true;
            continue;
        }
    }

 
        $suma = array(); 
        $resta = array(); 
        $multipicacion = array(); 
        $division = array(); 
 
     for ($i = 0; $i < 3; $i++) { 

           $suma[$i] = $num1[$i] + $num2[$i]; 
 
            $resta[$i] = $num1[$i] - $num2[$i]; 
 
           $multiplicacion[$i] = $num1[$i] * $num2[$i]; 

           $division[$i] = $num1[$i] / $num2[$i]; 
        } 
 
            echo "<h3>numero 1</h3>"; 

        echo "<table border='1' cellpadding='6' cellspacing='0' style=color:#ff4d94; >";
        echo "<tr><th>Número 1</th></tr>";
        for ($i = 0; $i < 3; $i++) {     
            echo "<tr><td>" . $num1[$i] . "</td></tr>"; 
        } 
        echo "</table><br>";
   
             echo "<h3>numero 2</h3>"; 
 
        echo "<table border='1' cellpadding='6' cellspacing='0' style=color:#ff4d94;>";
        echo "<tr><th>Número 2</th></tr>";
        for ($i = 0; $i < 3; $i++) {     
            echo "<tr><td>" . $num2[$i] . "</td></tr>"; 
        } 
        echo "</table><br>";
 
        echo "<table border='1' cellpadding='6' cellspacing='0' style=color:#ff4d94;>";
        echo "<tr><th>Suma</th></tr>";
        for ($i = 0; $i < 3; $i++) { 
            echo "<tr><td>$" . number_format($suma[$i], 2) . "</td></tr>"; 
        } 
        echo "</table><br>";
 
        echo "<table border='1' cellpadding='6' cellspacing='0' style=color:#ff4d94;>";
        echo "<tr><th>resta</th></tr>";
        for ($i = 0; $i < 3; $i++) { 
            echo "<tr><td>$" . number_format($resta[$i], 2) . "</td></tr>"; 
        } 
        echo "</table><br>";
 
        echo "<table border='1' cellpadding='6' cellspacing='0' style=color:#ff4d94;>";
        echo "<tr><th>multiplicacion</th></tr>";
        for ($i = 0; $i < 3; $i++) { 
            echo "<tr><td>$" . number_format($multiplicacion[$i], 2) . "</td></tr>"; 
        } 
        echo "</table><br>";

        echo "<table border='1' cellpadding='6' cellspacing='0' style=color:#ff4d94;>";
        echo "<tr><th>division</th></tr>";
        for ($i = 0; $i < 3; $i++) { 
            echo "<tr><td>$" . number_format($division[$i], 2) . "</td></tr>"; 
        } 
        echo "</table><br>";

    }

?>
</head> 
<body>
