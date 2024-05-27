<?php
//Agregamos el header
include '../header.php';

// Verifica si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resultado1 = $resultado2 = null;
    
    // Obtén los valores de A, B y C del formulario
    if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $resultado1 = ejercicio7($a, $b, $c);
    }
    
    // Obtén los valores de D y E del formulario
    if (isset($_POST['d']) && isset($_POST['e'])) {
        $d = $_POST['d'];
        $e = $_POST['e'];
        $resultado2 = ejercicio8($d, $e);
    }
}

function ejercicio7($a, $b, $c) {
    if ($a == $b && $b == $c) {
        return "<p>El triangulo es Equilátero</p>";
    } elseif ($a == $b || $a == $c || $b == $c) {
        return "<p>El triangulo es Isósceles</p>";
    } else {
        return "<p>El triangulo es Escaleno</p>";
    }
}

function ejercicio8($num1, $num2) {
    return max($num1, $num2);
}
?>

<body>
    <section id="indexEjer">
    <div class="container">
        <div class="card">
            <h1>Ejercicio 7</h1>
            <h2>Clasificador de Triangulos</h>
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
                echo "<p>$resultado1</p>";
            }
            ?>
        </div>

        <div class="card">
            <h1>Ejercicio 8</h1>
            <h2>Comparador de numeros</h>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="d">Valor de A:</label>
                <input type="number" id="d" name="d" required>
                
                <label for="e">Valor de B:</label>
                <input type="number" id="e" name="e" required>
                
                <button type="submit">Calcular</button>
            </form>
            <?php
            // Verifica si $resultado está definido antes de mostrarlo
            if (isset($resultado2)) {
                echo "<h2>Resultado:</h2>";
                echo "<p>El numero Mayor es: $resultado2</p>";
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
