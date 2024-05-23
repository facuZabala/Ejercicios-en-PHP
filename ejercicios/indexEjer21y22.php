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
        $resultado = ejercicio21($numeros);

    }
    if (isset($_POST['numeros2'])){
        // Obtén los valores de los números del formulario
        $numeros_str = $_POST['numeros2'];

        // Convertir la cadena de números en un array
        $numeros = explode(',', $numeros_str);

        // Calcula el resultado utilizando la función ejercicio19
        $resultado2 = ejercicio22($numeros);

    }
}
// Ejercicio 21: Dada una lista de números calcular su promedio general
function ejercicio21($numeros) {
    if (count($numeros) == 0) {
        return "La lista no puede estar vacía.";
    }
    $promedio = array_sum($numeros) / count($numeros);
    return $promedio;
}

// Ejercicio 22: Contar la cantidad de números ingresados por el usuario, la lista se corta al ingresar un 0 o un número negativo
function ejercicio22($numeros) {
    $cantidad = 0;
    foreach ($numeros as $numero) {
        if ($numero <= 0) {
            break;
        }
        $cantidad++;
    }
    return $cantidad;
}
?>

<body>
    <div class="container">
        <div class="card">
            <h1>Ejercicio 21</h1>
            <h2>Calcular el promedio general de una lista N números</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="numeros">Ingrese N números separados por comas:</label>
                <input type="text" id="numeros" name="numeros" required>

                <button type="submit">Calcular</button>
            </form>

            <?php
            // Verifica si $resultado está definido antes de mostrarlo
            if (isset($resultado)) {
                echo "<p>$resultado</p>";
            }
            ?>
        </div>

        <div class="card">
            <h1>Ejercicio 22</h1>
            <h2>Cantidad de números ingresados (la lista se corta al ingresar un 0 o un número negativo)</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="numeros2">Ingrese números separados por comas:</label>
                <input type="text" id="numeros2" name="numeros2" required>

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
