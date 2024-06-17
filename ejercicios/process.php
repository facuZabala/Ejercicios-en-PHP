<?php
header('Content-Type: application/json');

$resultado1 = $resultado2 = null;

if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $resultado1 = ejercicio1($a, $b, $c);
} 

if (isset($_POST['e']) && isset($_POST['f'])) {
    $e = $_POST['e'];
    $f = $_POST['f'];
    $resultado2 = ejercicio2($e, $f);
}

echo json_encode(array('resultado1' => $resultado1, 'resultado2' => $resultado2));

function ejercicio1($a, $b, $c) {
    return $a + $b - $c + 100;
}

function ejercicio2($e, $f) {
    return ($e - $f) * ($e + $f);
}
?>
