<?php include '../header.php'; ?>

<body>
    <div class="container">
        <h1>Calculadora de A + B - C + 100</h1>
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

    <h1>Ejercicio 2</h1>

    <div class="container">
        <h1>Calculadora de (A - B) * (A + B)</h1>
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
</body>

