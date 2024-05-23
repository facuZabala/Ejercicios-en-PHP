<?php
// Agregamos el header
include '../header.php';

// Verifica si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['a']) && isset($_POST['b'])){
        // Obtén los valores de A y B del formulario
        $a = $_POST['a'];
        $b = $_POST['b'];

        // Calcula el resultado utilizando la función ejercicio17
        $resultado = ejercicio17($a, $b);
    }

    if (isset($_POST['c'])){
        // Obtén el valor de A del formulario
        $a = $_POST['c'];

        // Calcula el resultado utilizando la función ejercicio18
        $resultado2 = ejercicio18($a);
    }
}

function ejercicio17($num1, $num2) {
    // Verifica el orden de los números y reordena si es necesario
    if ($num1 > $num2) {
        list($num1, $num2) = [$num2, $num1];
    }
    return range($num1, $num2);
}

function ejercicio18($numero) {
    $sumatoria = array_sum(range(0, $numero));
    return $sumatoria;
}
?>

<body>
    <div class="container">
        <div class="card">
            <h1>Ejercicio 17</h1>
            <h2>Mostrar todos los números enteros entre A y B</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="a">Valor de A:</label>
                <input type="number" id="a" name="a" required>

                <label for="b">Valor de B:</label>
                <input type="number" id="b" name="b" required>

                <button type="submit">Calcular</button>
            </form>

            <?php
            // Verifica si $resultado está definido antes de mostrarlo
            if (isset($resultado)) {
                if (is_array($resultado)) {
                    echo "<table class='table table-striped'>";
                    echo "<thead><tr><th>Numeros</th></tr></thead><tbody>";
                    foreach ($resultado as $numero) {
                        echo "<tr><td>$numero</td></tr>";
                    }
                    echo "</tbody></table>";
                } else {
                    echo "<p>$resultado</p>";
                }
            }
            ?>
        </div>

        <div class="card">
            <h1>Ejercicio 18</h1>
            <h2>Sumatoria hasta el número colocado</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="c">Valor de A:</label>
                <input type="number" id="c" name="c" required>

                <button type="submit">Calcular</button>
            </form>

            <?php
            // Verifica si $resultado está definido antes de mostrarlo
            if (isset($resultado2)) {
                    echo "<p>$resultado2</p>";
                }
            ?>
        </div>
    </div>
</body>
</html>
