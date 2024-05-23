<?php
//Agregamos el header
include '../header.php';

// Verifica si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $resultado1 = $resultado2 = null;
    if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        // Obtén los valores de A, B y C del formulario
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $resultado1 = ejercicio11($a, $b, $c);    
    }

    if (isset($_POST['d']) && isset($_POST['e']) && isset($_POST['f'])) {
        // Obtén los valores de A, B y C del formulario
        $a = $_POST['d'];
        $b = $_POST['e'];
        $c = $_POST['f'];

        $resultado2 = ejercicio11($a, $b, $c);
    }
} 

function ejercicio11($a, $b, $c) {
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

<body>
    <div class="container">
        <div class="card">
            <h1>Calculadora de Operaciones Básicas</h1>
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
            if (isset($resultado1)) {
                echo "<h2>Resultado:</h2>";
                echo "<p>El resultado de la operación Suma es: " . $resultado1['suma'] . "</p>";
                echo "<p>El resultado de la operación Resta es: " . $resultado1['resta'] . "</p>";
                echo "<p>El resultado de la operación Multiplicación es: " . $resultado1['producto'] . "</p>";
                echo "<p>El resultado de la operación Cociente es: " . $resultado1['cociente'] . "</p>";
            }
            ?>
        </div>

        <div class="card">
            <h1>Calculadora de Operaciones Básicas Solo si son Positivas</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="d">Valor de A:</label>
                <input type="number" id="d" name="d" required>

                <label for="e">Valor de B:</label>
                <input type="number" id="e" name="e" required>

                <label for="f">Valor de C:</label>
                <input type="number" id="f" name="f" required>

                <button type="submit">Calcular</button>
            </form>

            <?php
            if (isset($resultado2)) {
                echo "<h2>Resultado:</h2>";
                if($resultado2['suma'] >= 0) {
                    echo "<p>El resultado de la operación Suma es: " . $resultado2['suma'] . "</p>";
                } else {
                    echo "<p>El resultado de la operación Suma es Negativa</p>";
                }
                if($resultado2['resta'] >= 0) {
                    echo "<p>El resultado de la operación Resta es: " . $resultado2['resta'] . "</p>";
                } else {
                    echo "<p>El resultado de la operación Resta es Negativa</p>";
                }
                if($resultado2['producto'] >= 0) {
                    echo "<p>El resultado de la operación Multiplicación es: " . $resultado2['producto'] . "</p>";
                } else {
                    echo "<p>El resultado de la operación Multiplicación es Negativa</p>";
                }
                if(is_numeric($resultado2['cociente']) && $resultado2['cociente'] >= 0) {
                    echo "<p>El resultado de la operación Cociente es: " . $resultado2['cociente'] . "</p>";
                } else if(is_numeric($resultado2['cociente'])){
                    echo "<p>El resultado de la operación Cociente es Negativa</p>";
                } else {
                    echo "<p>No se puede dividir por 0</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
