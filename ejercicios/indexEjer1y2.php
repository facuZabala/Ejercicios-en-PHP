<?php
function ejercicio1($a, $b, $c) {
    return $a + $b - $c + 100;
}

function ejercicio2($e, $f) {
    return ($e - $f) * ($e + $f);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flip Card Form</title>
    <link rel="stylesheet" href="style_Ejer.css">
</head>
<body>
    <section id="indexEjer">
        <div class="container">
            <div class="flip-card" id="card1">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h1>Ejercicio 1</h1>
                        <h2>Calculadora de A + B - C + 100</h2>
                        <form id="form1">
                            <label for="a">Ingrese los números:</label>
                            <input type="number" id="a" name="a" placeholder="Valor de A" required>
                            <input type="number" id="b" name="b" placeholder="Valor de B" required>
                            <input type="number" id="c" name="c" placeholder="Valor de C" required>
                            <button type="submit">Calcular</button>
                        </form>
                    </div>
                    <div class="flip-card-back" id="result1"></div>
                </div>
            </div>

            <div class="flip-card" id="card2">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h1>Ejercicio 2</h1>
                        <h2>Calculadora de (A - B) * (A + B)</h2>
                        <form id="form2">
                            <input type="number" id="e" name="e" placeholder="Valor de A" required>
                            <input type="number" id="f" name="f" placeholder="Valor de B" required>
                            <button type="submit">Calcular</button>
                        </form>
                    </div>
                    <div class="flip-card-back" id="result2"></div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        document.getElementById('form1').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(e.target);
            fetch('process.php', {
                method: 'POST',
                body: formData
            }).then(response => response.json()).then(data => {
                document.getElementById('result1').innerHTML = `<h2>Resultado:</h2><p>El resultado de la operación es: ${data.resultado1}</p>`;
                document.getElementById('card1').querySelector('.flip-card-inner').classList.add('flipped');
            });
        });

        document.getElementById('form2').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(e.target);
            fetch('process.php', {
                method: 'POST',
                body: formData
            }).then(response => response.json()).then(data => {
                document.getElementById('result2').innerHTML = `<h2>Resultado:</h2><p>El resultado de la operación es: ${data.resultado2}</p>`;
                document.getElementById('card2').querySelector('.flip-card-inner').classList.add('flipped');
            });
        });
    </script>
</body>
</html>
