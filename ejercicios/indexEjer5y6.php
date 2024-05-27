<?php
//Agregamos el header
include '../header.php';
// Verifica si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resultado1 = $resultado2 = null;
    // Obtén los valores de A y B del formulario
    if (isset($_POST['a'])){
        $num1 = $_POST['a'];
        $resultado1 = ejercicio5($num1);
    }
    if (isset($_POST['b'])){
        $num2 = $_POST['b'];
        $resultado2 = ejercicio6($num2);
    }
}

function ejercicio5($numero) {
    if($numero > 100){
        return "<p>El numero $numero es Mayor</p>";
    }else{
        return "<p>El numero $numero es Menor</p>";
    }
}

function ejercicio6($numero) {
    if ($numero > 0) {
        return "<p>El numero $numero es Positivo</p>";
    } elseif ($numero < 0) {
        return "<p>El numero $numero es Negativo</p>";
    } else {
        return "<p>El numero $numero es Nulo</p>";
    }
}
?>

<body>
    <section id="indexEjer">
    <div class="container">
        <div class="card">
            <h1>Ejercicio 5</h1>
            <h2>Mayor o Menor a 100</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="a">Valor de A:</label>
                <input type="number" id="a" name="a" required>
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
            <h1>Ejercicio 6</h1>
            <h2>Positivo o Negativo</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="b">Valor de A:</label>
                <input type="number" id="b" name="b" required>
                <button type="submit">Calcular</button>
            </form>
            <?php
            // Verifica si $resultado está definido antes de mostrarlo
            if (isset($resultado2)) {
                echo "<h2>Resultado:</h2>";
                echo "<p>$resultado2</p>";
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
