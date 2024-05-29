<?php
// Agregamos el header
include '../header.php';

session_start();

// Inicializar el array de números en la sesión si no existe
if (!isset($_SESSION['numeros'])) {
    $_SESSION['numeros'] = [];
}

// Verifica si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén el valor del número del formulario
    $numero = $_POST['numero'];

    // Si el número es mayor que 0, agrégalo al array
    if ($numero > 0) {
        $_SESSION['numeros'][] = $numero;
    } else {
        // Calcula el promedio cuando se ingresa 0 o un número negativo
        $resultado = ejercicio23($_SESSION['numeros']);
        // Limpia el array de números para un nuevo cálculo
        $_SESSION['numeros'] = [];
    }
}
// Ejercicio 23: Promediar los números ingresados por un usuario. La lista se corta al ingresar un 0 o un número negativo
function ejercicio23($numeros) {
    if (count($numeros) == 0) {
        return "No se ingresaron números válidos.";
    }
    $promedio = array_sum($numeros) / count($numeros);
    return "El promedio de los números ingresados es: " . $promedio;
}

// Ejercicio 24: Generar los primeros 100 números enteros e indicar si cada uno de ellos es par o impar
function ejercicio24() {
    $resultado = [];
    for ($i = 1; $i <= 100; $i++) {
        $resultado[$i] = ($i % 2 == 0) ? 'Par' : 'Impar';
    }
    return $resultado;
}

// Llama a la función para obtener el resultado
$resultado2 = ejercicio24();

?>

<body>
    <section id="indexEjer">
    <div class="container">
        <div class="card">
            <h1>Ejercicio 23</h1>
            <h2>Promediar los números ingresados</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="numero">Ingrese un número (0 o negativo para terminar):</label>
                <input type="number" id="numero" name="numero" required>

                <button type="submit">Agregar</button>
            </form>

            <?php
            // Verifica si $resultado está definido antes de mostrarlo
            if (isset($resultado)) {
                echo "<p>$resultado</p>";
            }
            ?>
        </div>

        <div class="card">
            <h1>Ejercicio 24</h1>
            <h2>Generar los primeros 100 números e indicar si son pares o impares</h2>
            <ul>
            <?php
            // Muestra el resultado
            echo "<table class='table table-striped'>";
            echo "<thead><tr><th>Número</th><th>Opuesto</th></tr></thead><tbody>";
            foreach ($resultado2 as $numero => $paridad) {
                echo "<tr><td>$numero</td><td>$paridad</td></tr>";
            }
            echo "</tbody></table>";
            ?>
            </ul>
        </div>
    </div>
    </section>
</body>
<?php
include 'footer.php';
?>
</html>
