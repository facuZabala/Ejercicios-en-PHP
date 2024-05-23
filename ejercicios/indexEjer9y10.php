<?php
//Agregamos el header
include '../header.php';

// Verifica si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resultado1 = $resultado2 = null;

    if (isset($_POST['a']) && isset($_POST['b'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $resultado1 = ejercicio9($a, $b);
    }

    if (isset($_POST['c'])){
        $num = $_POST['c'];
        $resultado2 = ejercicio10($num);
    }
}

function ejercicio9($num1, $num2) {
    return min($num1, $num2);
}

function ejercicio10($duracion) {
    if ($duracion <= 3) {
        return $duracion * 9.50;
    } else {
        return 3 * 9.50 + ($duracion - 3) * 1.10;
    }
}
?>

<body>
    <div class="container">
        <div class="card">
            <h1>Comparador de Numeros</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="a">Valor de A:</label>
                <input type="number" id="a" name="a" required>

                <label for="b">Valor de B:</label>
                <input type="number" id="b" name="b" required>

                <button type="submit">Calcular</button>
            </form>

            <?php
            if (isset($resultado1)) {
                echo "<h2>Resultado:</h2>";
                echo "<p>El numero Menor es: $resultado1</p>";
            }
            ?>
        </div>

        <div class="card">
            <h1>Calculador de Precio de llamada</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="c">Duracion de la llamada:</label>
                <input type="number" id="c" name="c" required>

                <button type="submit">Calcular</button>
            </form>

            <?php
            if (isset($resultado2)) {
                echo "<h2>Resultado:</h2>";
                echo "<p>El precio de la Duracion de la llamada es de: $$resultado2</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
