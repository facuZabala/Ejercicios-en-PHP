<?php
// Agregamos el header
include '../header.php';

// Calcula el resultado utilizando la función ejercicio15
$resultado = ejercicio15();

function ejercicio15() {
    $numeros = range(1, 100);
    $opuestos = array_map(function($numero) {
        return -$numero;
    }, $numeros);
    return array_combine($numeros, $opuestos);
}

// Inicializa $resultado2 para evitar errores de referencia indefinida
$resultado2 = null;

// Verifica si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén el valor de A del formulario
    if (isset($_POST['a'])) {
        $a = $_POST['a'];

        // Calcula el resultado utilizando la función ejercicio16
        $resultado2 = ejercicio16($a);
    }
}

function ejercicio16($numero) {
    if ($numero < 1) {
        return "El número debe ser mayor o igual a 1";
    }
    $lista = range(1, $numero);
    return $lista;
}
?>

<body>
    <section id="indexEjer">
    <div class="container">
        <div class="card">
            <h1>Ejercicio 15</h1>
            <h2>Números del 1 al 100 y sus opuestos</h2>
            <?php
            // Verifica si $resultado está definido antes de mostrarlo
            if (isset($resultado)) {
                echo "<table class='table table-striped'>";
                echo "<thead><tr><th>Número</th><th>Opuesto</th></tr></thead><tbody>";
                foreach ($resultado as $numero => $opuesto) {
                    echo "<tr><td>$numero</td><td>$opuesto</td></tr>";
                }
                echo "</tbody></table>";
            }
            ?>
        </div>

        <div class="card">
            <h1>Ejercicio 16</h1>
            <h2>Generador de Números del 1 hasta el valor ingresado</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="a">Valor de A:</label>
                <input type="number" id="a" name="a" required>

                <button type="submit">Calcular</button>
            </form>

            <?php
            // Verifica si $resultado2 está definido antes de mostrarlo
            if (isset($resultado2)) {
                if (is_array($resultado2)) {
                    echo "<table class='table table-striped'>";
                    echo "<thead><tr><th>Numeros</th></tr></thead><tbody>";
                    foreach ($resultado2 as $numero) {
                        echo "<tr><td>$numero</td></tr>";
                    }
                    echo "</tbody></table>";
                } else {
                    echo "<p>$resultado2</p>"; // Mensaje de error si el número es menor a 1
                }
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
