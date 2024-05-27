<?php
include '../header.php';
// Verifica si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los valores de A, B y C del formulario
    $resultado1 = $resultado2 = null;

    if (isset($_POST['a'])){
        $num = $_POST['a'];
        $resultado1 = ejercicio3($num);
    }
    if (isset($_POST['b']) && isset($_POST['c'])){
        $b = $_POST['b'];
        $c = $_POST['c'];
        $resultado2 = ejercicio4($b, $c);
    }
}

function ejercicio3($num) {
    return -$num;
}

// Dados dos numeros, mostrar su producto
function ejercicio4($num1, $num2) {
    return $num1 * $num2;
}
?>

<body>
    <section id="indexEjer">
    <div class="container">
        <div class="card">
            <h1>Ejercicio 3</h1>
            <h2>Opuesto del numero ingresado</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="a">Ingrese el Numero:</label>
                <input type="number" id="a" name="a" required>
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
            <h1>Ejercicio 4</h1>
            <h2>Calculadora de A * B</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="b">Valor de A:</label>
                <input type="number" id="b" name="b" required>
                <label for="c">Valor de B:</label>
                <input type="number" id="c" name="c" required>
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
