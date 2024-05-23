<?php
// Ejercicio 1
function ejercicio1($a, $b, $c) {
    return $a + $b - $c + 100;
}

// Ejercicio 2
function ejercicio2($a, $b) {
    return ($a - $b) * ($a + $b);
}

// Ejercicio 3
function ejercicio3($num) {
    return -$num;
}

// Ejercicio 4
function ejercicio4($num1, $num2) {
    return $num1 * $num2;
}

// Ejercicio 5
function ejercicio5($numero) {
    if($numero > 100){
        return "<p>El numero $numero es Mayor</p>";
    }else{
        return "<p>El numero $numero es Menor</p>";
    }
}

// Ejercicio 6
function ejercicio6($numero) {
    if ($numero > 0) {
        return "<p>El numero $numero es Positivo</p>";
    } elseif ($numero < 0) {
        return "<p>El numero $numero es Negativo</p>";
    } else {
        return "<p>El numero $numero es Nulo</p>";
    }
}

// Ejercicio 7
function ejercicio7($a, $b, $c) {
    if ($a == $b && $b == $c) {
        return "<p>El triangulo es Equilátero</p>";
    } elseif ($a == $b || $a == $c || $b == $c) {
        return "<p>El triangulo es Isósceles</p>";
    } else {
        return "<p>El triangulo es Escaleno</p>";
    }
}

// Ejercicio 8
function ejercicio8($num1, $num2) {
    return max($num1, $num2);
}

// Ejercicio 9
function ejercicio9($num1, $num2) {
    return min($num1, $num2);
}

// Ejercicio 10
function ejercicio10($duracion) {
    if ($duracion <= 3) {
        return $duracion * 9.50;
    } else {
        return 3 * 9.50 + ($duracion - 3) * 1.10;
    }
}

// Ejercicio 11
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

// Ejercicio 12
function ejercicio12($a, $b, $c) {
    if ($a > 0 && $b > 0 && $c > 0) {
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
    } else {
        return "Todos los números deben ser positivos";
    }
}

// Ejercicio 13
function ejercicio13($nota1, $nota2, $nota3) {
    $not = 0;
    $notMin = 0;
    $notMax = 0;
    $notas = [$nota1, $nota2, $nota3];
    foreach ($notas as $nota) {
        if ($nota < 0 || $nota > 10) {
            return "<p>Una de las notas no corresponde</p>";
        }else{
            if($notMax < $nota){
                $notMax = $nota;
            }
            if($notMin < $nota){
                $notMin = $nota;
            }
            $not = $not + $nota;
        }
    }

    $promedio = $not / count($notas);

    return [
        'promedio' => $promedio,
        'notaMayor' => $notMax,
        'notaMenor' => $notMin
    ];
}

// Ejercicio 14
function ejercicio14() {
    $numeros = range(1, 100);
    return $numeros;
}

// Ejercicio 15
function ejercicio15() {
    $numeros = range(1, 100);
    $opuestos = array_map(function($numero) {
        return -$numero;
    }, $numeros);
    return array_combine($numeros, $opuestos);
}

// Ejercicio 16
function ejercicio16($numero) {
    if ($numero < 1) {
        return "El número debe ser mayor o igual a 1";
    }
    $lista = range(1, $numero);
    return $lista;
}

// Ejercicio 17: Mostrar una lista de todos los números enteros entre dos números ordenados de menor a mayor
function ejercicio17($num1, $num2) {
    if($num1 < $num2){
        return "El primer numero es menor que el segundo, Ingrese nuevamente";
    }else{
        $numeros = range($num1, $num2);
        return $numeros;
    }
}

// Ejercicio 18: Efectuar la sumatoria de todos los números que le anteceden desde el 1 hasta un número dado
function ejercicio18($numero) {
    $sumatoria = array_sum(range(1, $numero));
    return $sumatoria;
}   

// Ejercicio 19: Calcular el promedio general de una lista de 20 números
function ejercicio19($numeros) {
    if (count($numeros) != 20) {
        return "La lista debe contener exactamente 20 números.";
    }
    $promedio = array_sum($numeros) / count($numeros);
    return $promedio;
}

// Ejercicio 20: Dada una lista de N números calcular su sumatoria
function ejercicio20($numeros) {
    $sumatoria = array_sum($numeros);
    return $sumatoria;
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

// Ejercicio 23: Promediar los números ingresados por un usuario, la lista se corta al ingresar un 0 o un número negativo
function ejercicio23($numeros) {
    $sumatoria = 0;
    $cantidad = 0;
    foreach ($numeros as $numero) {
        if ($numero <= 0) {
            break;
        }
        $sumatoria += $numero;
        $cantidad++;
    }
    if ($cantidad == 0) {
        return "No se ingresaron números válidos.";
    }
    $promedio = $sumatoria / $cantidad;
    return $promedio;
}

// Ejercicio 24: Generar los primeros 100 números enteros e indicar si cada uno de ellos es par o impar
function ejercicio24() {
    $resultado = [];
    for ($i = 1; $i <= 100; $i++) {
        $resultado[$i] = ($i % 2 == 0) ? 'Par' : 'Impar';
    }
    return $resultado;
}
