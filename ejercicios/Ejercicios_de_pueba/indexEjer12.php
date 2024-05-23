<?php
// Verifica si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los valores de A, B y C del formulario
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    // Calcula el resultado utilizando la función ejercicio1
    $resultado = ejercicio12($a, $b, $c);
} 
function ejercicio12($a, $b, $c) {
    $suma = $a + $b + $c;
    $resta = $a - $b - $c;
    $producto = $a * $b * $c;
    $cociente = ($b != 0 && $c != 0) ? $a / $b / $c : "No se puede dividir por cero";

    return [
        'suma' => $suma,
        'resta' => $resta,
        'producto' => $producto,
        'cociente' => $cociente
    ];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de A + B - C + 100</title>
    <link rel="stylesheet" href="style_Ejer.css">
</head>
<header>
    <h1>Bienvenido a mi sitio web</h1>
    <nav class="navbar">
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="sobre_nosotros.php">Sobre Nosotros</a></li>
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
        <h1>Calculadora de A + B - C + 100</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="a">Valor de A:</label>
            <input type="number" id="a" name="a" required>

            <label for="b">Valor de B:</label>
            <input type="number" id="b" name="b" required>

            <label for="c">Valor de C:</label>
            <input type="number" id="c" name="c" required>

            <button type="submit">Calcular</button>
        </form>

        <?php
        // Verifica si $resultado está definido antes de mostrarlo
        if (isset($resultado)) {
            if($resultado['suma'] >= 0) {
                echo "<p>El resultado de la operación Suma es: " . $resultado['suma'] . "</p>";
            }else{
                echo "<p>El resultado de la operación Suma es Negativa</p>";
            }
            if($resultado['resta'] >= 0) {
                echo "<p>El resultado de la operación Resta es: " . $resultado['resta'] . "</p>";
            }else{
                echo "<p>El resultado de la operación Resta es Negativa</p>";
            }
            if($resultado['producto'] >= 0) {
                echo "<p>El resultado de la operación Multiplicación es: " . $resultado['producto'] . "</p>";
            }else{
                echo "<p>El resultado de la operación Multiplicación es Negativa</p>";
            }
            if(is_numeric($resultado['cociente']) && $resultado['cociente'] >= 0) {
                echo "<p>El resultado de la operación Cociente es: " . $resultado['cociente'] . "</p>";
            }else if(is_numeric($resultado['cociente'])){
                echo "<p>El resultado de la operación Cociente es Negativa</p>";
            }else{
                echo "<p>No se puede dividir por 0</p>";
            }
    }
        ?>
    </div>
</body>
</html>
