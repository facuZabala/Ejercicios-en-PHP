<?php
// Verifica si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los valores de los números del formulario
    $numeros_str = $_POST['numeros'];

    // Convertir la cadena de números en un array
    $numeros = explode(',', $numeros_str);

    // Calcula el resultado utilizando la función ejercicio19
    $resultado = ejercicio22($numeros);
}

// Ejercicio 22: Contar la cantidad de números ingresados por el usuario, la lista se corta al ingresar un 0 o un número negativo
function ejercicio22($numeros) {
    $cantidad = 0;
    foreach ($numeros as $numero) {
        if ($numero <= 0) {
            break;
        }
        $cantidad++;
    }
    return $cantidad;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 22</title>
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
        <h1>Cantidad de Mineros</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="numeros">Ingrese números separados por comas (la lista se corta al ingresar un 0 o un número negativo):</label>
            <input type="text" id="numeros" name="numeros" required>

            <button type="submit">Calcular</button>
        </form>

        <?php
        // Verifica si $resultado está definido antes de mostrarlo
        if (isset($resultado)) {
            echo "<p>$resultado</p>";
        }
        ?>
    </div>
</body>
</html>
