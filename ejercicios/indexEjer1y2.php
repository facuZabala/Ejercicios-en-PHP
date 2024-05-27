<?php
include '../header.php';
// Verifica si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inicializa variables para los resultados
    $resultado1 = $resultado2 = null;

    // Obtén y procesa los valores de A, B y C para el ejercicio 1
    if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        // Calcula el resultado utilizando la función ejercicio1
        $resultado1 = ejercicio1($a, $b, $c);
    } 

    // Obtén y procesa los valores de E y F para el ejercicio 2
    if (isset($_POST['e']) && isset($_POST['f'])) {
        $e = $_POST['e'];
        $f = $_POST['f'];

        // Calcula el resultado utilizando la función ejercicio2
        $resultado2 = ejercicio2($e, $f);
    }
}

function ejercicio1($a, $b, $c) {
    return $a + $b - $c + 100;
}

function ejercicio2($e, $f) {
    return ($e - $f) * ($e + $f);
}
?>

<body>
    <section id="indexEjer">
    <div class="container">
        <div class="card">
            <h1>Ejercicio 1</h1>
            <h2>Calculadora de A + B - C + 100</h2>
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
            if (isset($resultado1)) {
                echo "<h2>Resultado:</h2>";
                echo "<p>El resultado de la operación es: $resultado1</p>";
            }
            ?>
        </div>
        
        <div class="card">
            <h1>Ejercicio 2</h1>
            <h2>Calculadora de (A - B) * (A + B)</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="e">Valor de A:</label>
                <input type="number" id="e" name="e" required>

                <label for="f">Valor de B:</label>
                <input type="number" id="f" name="f" required>

                <button type="submit">Calcular</button>
            </form>

            <?php
            // Verifica si $resultado está definido antes de mostrarlo
            if (isset($resultado2)) {
                echo "<h2>Resultado:</h2>";
                echo "<p>El resultado de la operación es: $resultado2</p>";
            }
            ?>
        </div>
    </div>
    </section>
</body>
<?php
include 'footer.php';
?>
</html>
