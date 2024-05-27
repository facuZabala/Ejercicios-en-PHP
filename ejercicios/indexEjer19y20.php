<?php
// Agregamos el header
include '../header.php';

// Verifica si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['numeros'])){
        // Obtén los valores de los números del formulario
        $numeros_str = $_POST['numeros'];

        // Convertir la cadena de números en un array
        $numeros = explode(',', $numeros_str);

        // Calcula el resultado utilizando la función ejercicio19
        $resultado = ejercicio19($numeros);

    }
    if (isset($_POST['numeros2'])){
        // Obtén los valores de los números del formulario
        $numeros_str = $_POST['numeros2'];

        // Convertir la cadena de números en un array
        $numeros = explode(',', $numeros_str);

        // Calcula el resultado utilizando la función ejercicio20
        $resultado2 = ejercicio20($numeros);

    }
}
// Ejercicio 19: Calcular el promedio general de una lista de 20 números
function ejercicio19($numeros) {
    if (count($numeros) != 20) {
        return "<p>La lista debe contener exactamente 20 números.</p>";
    }else{
        $promedio = array_sum($numeros) / count($numeros);
        return $promedio;
    }
}
// Ejercicio 20
function ejercicio20($numeros) {
    $sumatoria = array_sum($numeros);
    return $sumatoria;
}
?>

<body>
    <section id="indexEjer">
    <div class="container">
        <div class="card">
            <h1>Ejercicio 19</h1>
            <h2>Calcular el promedio general de una lista de 20 números</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="numeros">Ingrese 20 números separados por comas:</label>
                <input type="text" id="numeros" name="numeros" required>

                <button type="submit">Calcular</button>
            </form>

            <?php
            // Verifica si $resultado está definido antes de mostrarlo
            if (isset($resultado)) {
                echo "<p>El promedio es: $resultado</p>";
            }
            ?>
        </div>

        <div class="card">
            <h1>Ejercicio 20</h1>
            <h2>Calcular la sumatoria de los números ingresados</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="numeros2">Ingrese 20 números separados por comas:</label>
                <input type="text" id="numeros2" name="numeros2" required>

                <button type="submit">Calcular</button>
            </form>

            <?php
            // Verifica si $resultado está definido antes de mostrarlo
            if (isset($resultado2)) {
                echo "<p>La sumatoria es: $resultado2</p>";
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
