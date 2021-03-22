<?php
/* $aTablero = array(
    "Letras" => array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J"),
    "numeros" => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10)
); */

$aTablero = array();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>

<body>
    <?php
    // Generamos 3 numeros aleatorios

    $tipo = rand(1, 4);
    $direccion = array("izquierda", "derecha", "arriba", "abajo");
    $fila = rand(1, 10);
    $columna = rand(1, 10);
    $indiceDireccion = rand(0, 3);

    echo "Tipo " . $tipo . "<br>";
    echo "Fila " . $fila . "<br>";
    echo "Columna " . $columna . "<br>";
    echo "Direccion " . $direccion[$indiceDireccion] . "<br>";


    $filaFinal = $fila;
    $columnaFinal = $columna;

    switch ($direccion[$indiceDireccion]) {
        case "izquierda": //izquierda
            echo "Posición final Fila: " . $fila . " Columna: " . $columnaFinal = $columna - ($tipo - 1) . "<br>";
            break;
        case "derecha": // derecha
            echo "Posición final Fila: " . $fila . " Columna: " . $columnaFinal = $columna + ($tipo - 1) . "<br>";
            break;
        case "arriba": // arriba
            echo "Posición final Fila: " . $filaFinal = $fila - ($tipo - 1) . " Columna: " . $columna . "<br>";
            break;
        case "abajo": // abajo
            echo "Posición final Fila: " . $filaFinal = $fila + ($tipo - 1) . " Columna: " . $columna . "<br>";
            break;
        default:
            echo "error";
            break;
    }


    // Creación Tablero
    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 10; $j++) {
            $aTablero[$i][$j] = "0";
        }
    }

    function generaRango($fila,$columna,$direccion,$tipo){

        $aCoordenadas = array(
            "FilaInicio" => $fila,
            "columnaInicio" => $columna,
            "filaFinal" => $fila,
            "columnaFinal" =>$columna,
            
        );

        switch ($direccion[$indiceDireccion]) {
            case "izquierda": //izquierda
                $aCoordenadas['columnaFinal'] = $columna - ($tipo - 1); 

                //echo "Posición final Fila: " . $fila . " Columna: " . $columnaFinal = $columna - ($tipo - 1) . "<br>";
                break;
            case "derecha": // derecha
                $aCoordenadas['columnaFinal'] = $columna + ($tipo - 1); 

                //echo "Posición final Fila: " . $fila . " Columna: " . $columnaFinal = $columna + ($tipo - 1) . "<br>";
                break;
            case "arriba": // arriba
                $aCoordenadas['$filaFinal'] = $fila - ($tipo - 1); 

                //echo "Posición final Fila: " . $filaFinal = $fila - ($tipo - 1) . " Columna: " . $columna . "<br>";
                break;
            case "abajo": // abajo
                $aCoordenadas['$filaFinal'] = $fila + ($tipo - 1); 

                //echo "Posición final Fila: " . $filaFinal = $fila + ($tipo - 1) . " Columna: " . $columna . "<br>";
                break;
            default:
                echo "error";
                break;
        }

    }
  

    function comprobarEspacio($f, $c, $d){
        $lEspacio = true;
        $fInicio = ;
        $fFinal;
        $cInicio =;
        $cFinal = ; 
        for ($i=$fInicio; $i <$fFinal ; $i++) { 
            for ($j=$cFinal; $j < $cFinal; $j++) { 
               if ($aTablero[$i][$j] != "0") {
                   $lEspacio = false;
               }
            }
        }
        return $lEspacio;
    }



    //Creación rango




    // Creación Tablero

    /* echo "<table>";

    echo "<tr>";

    foreach($aTablero['numeros'] as $numeros){
        echo "<td>" . $numeros . "</td>";
    }
    echo "</tr>";

    for ($i=0; $i < sizeof($aTablero['Letras']) ; $i++) { 
        echo "<tr>";
        for ($j=0; $j < sizeof($aTablero['numeros']) ; $j++) { 
         
            if ($j == 0) {
                echo "<td>" . $aTablero["Letras"][$i] . "</td>";
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>"; */



    ?>
</body>

</html>