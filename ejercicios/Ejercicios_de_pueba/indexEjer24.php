<?php
// Ejercicio 24: Generar los primeros 100 números enteros e indicar si cada uno de ellos es par o impar
function ejercicio24() {
    $resultado = [];
    for ($i = 1; $i <= 100; $i++) {
        $resultado[$i] = ($i % 2 == 0) ? 'Par' : 'Impar';
    }
    return $resultado;
}

// Llama a la función para obtener el resultado
$resultado = ejercicio24();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 24</title>
    <link rel="stylesheet" href="style_Ejer.css">
</head>
<header>
    <h1>Bienvenido a mi sitio web</h1>
    <nav class="navbar">
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../sobre_nosotros.php">Sobre Nosotros</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Ejercicios 1_6</a>
                <div class="dropdown-content">
                    <a href="indexEjer1.php">Ejercicio 1</a>
                    <a href="indexEjer2.php">Ejercicio 2</a>
                    <a href="indexEjer3.php">Ejercicio 3</a>
                    <a href="indexEjer4.php">Ejercicio 4</a>
                    <a href="indexEjer5.php">Ejercicio 5</a>
                    <a href="indexEjer6.php">Ejercicio 6</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Ejercicios 7_12</a>
                <div class="dropdown-content">
                    <a href="indexEjer7.php">Ejercicio 7</a>
                    <a href="indexEjer8.php">Ejercicio 8</a>
                    <a href="indexEjer9.php">Ejercicio 9</a>
                    <a href="indexEjer10.php">Ejercicio 10</a>
                    <a href="indexEjer11.php">Ejercicio 11</a>
                    <a href="indexEjer12.php">Ejercicio 12</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Ejercicios 13_18</a>
                <div class="dropdown-content">
                    <a href="indexEjer13.php">Ejercicio 13</a>
                    <a href="indexEjer14.php">Ejercicio 14</a>
                    <a href="indexEjer15.php">Ejercicio 15</a>
                    <a href="indexEjer16.php">Ejercicio 16</a>
                    <a href="indexEjer17.php">Ejercicio 17</a>
                    <a href="indexEjer18.php">Ejercicio 18</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Ejercicios 19_24</a>
                <div class="dropdown-content">
                    <a href="indexEjer19.php">Ejercicio 19</a>
                    <a href="indexEjer20.php">Ejercicio 20</a>
                    <a href="indexEjer21.php">Ejercicio 21</a>
                    <a href="indexEjer22.php">Ejercicio 22</a>
                    <a href="indexEjer23.php">Ejercicio 23</a>
                    <a href="indexEjer24.php">Ejercicio 24</a>
                </div>
            </li>
        </ul>
    </nav>
</header>
<body>
    <div class="container">
        <h1>Generar los primeros 100 números e indicar si son pares o impares</h1>
        <ul>
        <?php
        // Muestra el resultado
        foreach ($resultado as $numero => $paridad) {
            echo "<li>Número $numero: $paridad</li>";
        }
        ?>
        </ul>
    </div>
</body>
</html>
