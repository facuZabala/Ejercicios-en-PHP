<?php
// Agregamos el header
include '../header.php';

// Verifica si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inicializa variables para evitar errores de referencia indefinida
    $resultado = null;
    $a = $b = $c = null;

    // Obtén los valores de A, B y C del formulario
    if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        // Calcula el resultado utilizando la función ejercicio13
        $resultado = ejercicio13($a, $b, $c);
    }
}

function ejercicio13($nota1, $nota2, $nota3) {
    $not = 0;
    $notMin = 10;
    $notMax = 0;
    $notas = [$nota1, $nota2, $nota3];
    foreach ($notas as $nota) {
        if ($nota < 0 || $nota > 10) {
            return "<p>Una de las notas no corresponde</p>";
        } else {
            if ($notMax < $nota) {
                $notMax = $nota;
            }
            if ($notMin > $nota) {
                $notMin = $nota;
            }
            $not += $nota;
        }
    }

    $promedio = $not / count($notas);

    return [
        'promedio' => $promedio,
        'notaMayor' => $notMax,
        'notaMenor' => $notMin
    ];
}

$resultado2 = ejercicio14();

function ejercicio14() {
    $numeros = range(1, 100);
    return $numeros;
}
?>

<body>
    <section id="indexEjer">
    <div class="container">
        <div class="card">
            <h1>Ejercicio 13</h1>
            <h2>Calculadora de Notas de Alumnos</h2>
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
                if (is_array($resultado)) {
                    echo "<h3>Resultado:</h3>";
                    echo "<p>El promedio es: " . $resultado['promedio'] . "</p>";
                    echo "<p>La Mayor nota es: " . $resultado['notaMayor'] . "</p>";
                    echo "<p>La Menor nota es: " . $resultado['notaMenor'] . "</p>";
                } else {
                    echo "<p>$resultado</p>";
                }
            }
            ?>
        </div>

        <div class="card">
            <h1>Ejercicio 14</h1>
            <h2>Números del 1 al 100</h2>
            <div>
                <?php
                // Verifica si $resultado2 está definido antes de mostrarlo
                if (isset($resultado2)) {
                    echo "<p>";
                    foreach ($resultado2 as $numero) {
                        echo "$numero ";
                    }
                    echo "</p>";
                }
                ?>
            </div>
        </div>
    </div>
    </section>
</body>
<?php
include 'footer.php';
?>
</html>
