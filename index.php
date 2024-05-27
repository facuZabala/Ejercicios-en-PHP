<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>👨‍💻Ejercicios en PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Bienvenido a mi sitio web</h1>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="sobre_nosotros.php">Sobre Nosotros</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Ejercicios</a>
                    <div class="dropdown-content">  
                        <div class="dropdown">
                            <a href="#" class="dropbtn">Ejercicios del 1 al 6</a>
                            <div class="dropdown-content">
                                <a href="ejercicios/indexEjer1y2.php">Ejercicios 1 y 2</a>
                                <a href="ejercicios/indexEjer3y4.php">Ejercicios 3 y 4</a>
                                <a href="ejercicios/indexEjer5y6.php">Ejercicio 5 y 6</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="dropbtn">Ejercicios del 7 al 12</a>
                            <div class="dropdown-content">
                                <a href="ejercicios/indexEjer7y8.php">Ejercicio 7 y 8</a>
                                <a href="ejercicios/indexEjer9y10.php">Ejercicio 9 y 10</a>
                                <a href="ejercicios/indexEjer11y12.php">Ejercicio 11 y 12</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="dropbtn">Ejercicios del 13 al 18</a>
                            <div class="dropdown-content">
                                <a href="ejercicios/indexEjer13y14.php">Ejercicio 13 y 14</a>
                                <a href="ejercicios/indexEjer15y16.php">Ejercicio 15 y 16</a>
                                <a href="ejercicios/indexEjer17y18.php">Ejercicio 17 y 18</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="dropbtn">Ejercicios del 19 al 24</a>
                            <div class="dropdown-content">
                                <a href="ejercicios/indexEjer19y20.php">Ejercicio 19 y 20</a>
                                <a href="ejercicios/indexEjer21y22.php">Ejercicio 21 y 22</a>
                                <a href="ejercicios/indexEjer23y24.php">Ejercicio 23 y 24</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    
    <section id="presentacion" class="presentacion">
        <h2><a>¡Bienvenido a nuestro proyecto en PHP!</a></h2>
        <p>Bienvenido a nuestro proyecto sobre Ejercicios Matemáticos en PHP.</p>
        <p>En esta página podrá ver 24 ejercicios de matemáticas, cuyas resoluciones están hechas en</p> 
        <p>el lenguaje de programación "PHP". Por cada pantalla hay 2 ejercicios, con un botón para calcular el resultado</p>
        <p>y otro para poder ver el código que se implementó.</p>
        <a href="#tarjetas" class="btn-llamativa">Explora Los Ejercicios disponibles</a>
    </section>

    <section id="tarjetas" class="tarjetas">
        <div class="contenido-seccion">
            <h2>Ejercicios</h2>
            <div class="galeria">
                <div class="proyecto">
                    <a href="ejercicios/indexEjer1y2.php">
                        <img src="img/1y2.jpeg" alt="">
                        <div class="overlay">
                            <h3>Ejercicios 1 y 2</h3>
                            <p>Ejercicio 1: Hallar A + B – C + 100.</p>
                            <p>Ejercicio 2: Obtener (a - b) * (a + b).</p>
                        </div>
                    </a>
                </div>
                <div class="proyecto">
                    <a href="ejercicios/indexEjer3y4.php">
                        <img src="img/3y4.jpeg" alt="">
                        <div class="overlay">
                            <h3>Ejercicios 3 y 4</h3>
                            <p>Ejercicio 3: Dado un numero positivo, mostrar su opuesto.</p>
                            <p>Ejercicio 4: Dados dos numeros, mostrar su producto.</p>
                        </div>
                    </a>
                </div>
                <div class="proyecto">
                    <a href="ejercicios/indexEjer5y6.php">
                        <img src="img/5y6.jpeg" alt="">
                        <div class="overlay">
                            <h3>Ejercicios 5 y 6</h3>
                            <p>Ejercicio 5: Dado número, verificar si esmayor a 100.</p>
                            <p>Ejercicio 6: Dado un numero verifican si es positivo, negativo o nulo.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="galeria">
                <div class="proyecto">
                    <a href="ejercicios/indexEjer7y8.php">
                        <img src="img/7y8.jpeg" alt="">
                        <div class="overlay">
                            <h3>Ejercicios 7 y 8</h3>
                            <p>Ejercicio 7: Escribir un algoritmo que lea tres números e indique que tipo de triangulo forman.</p>
                            <p>Ejercicio 8: Crear un algoritmo que lea dos números y muestre el mayor de los dos .</p>
                        </div>
                    </a>
                </div>
                <div class="proyecto">
                    <a href="ejercicios/indexEjer9y10.php">
                        <img src="img/9y10.jpeg" alt="">
                        <div class="overlay">
                            <h3>Ejercicios 9 y 10</h3>
                            <p>Ejercicio 9: Crear un algoritmo que lea dos números y muestre el menor de los dos.</p>
                            <p>Ejercicio 10: Dada una duracion en minutos de una llamada telefonica, calcular su costo.</p>
                        </div>
                    </a>
                </div>
                <div class="proyecto">
                    <a href="ejercicios/indexEjer11y12.php">
                        <img src="img/11y12.jpeg" alt="">
                        <div class="overlay">
                            <h3>Ejercicios 11 y 12</h3>
                            <p>Ejercicio 11: Dado 3 números mostrar la suma, resta, el producto y al cociente.</p>
                            <p>Ejercicio 12: Dado 3 números mostrar la suma, resta, el producto y el cociente si son positivos.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="galeria">
                <div class="proyecto">
                    <a href="ejercicios/indexEjer13y14.php">
                        <img src="img/13y14.jpeg" alt="">
                        <div class="overlay">
                            <h3>Ejercicios 13 y 14</h3>
                            <p>Ejercicio 13: Una maestra ingresa 3 notas por alumno.</p>
                            <p>Ejercicio 14: Generar y mostrar los números del 1 al 100.</p>
                        </div>
                    </a>
                </div>
                <div class="proyecto">
                    <a href="ejercicios/indexEjer15y16.php">
                        <img src="img/15y16.jpeg" alt="">
                        <div class="overlay">
                            <h3>Ejercicios 15 y 16</h3>
                            <p>Ejercicio 15: Generar los números del 1 al 100 y mostrar sus opuestos.</p>
                            <p>Ejercicio 15: Ingresar un numero entero y mostrar una lista con todos los números desde 1 al número ingresado.</p>
                        </div>
                    </a>
                </div>
                <div class="proyecto">
                    <a href="ejercicios/indexEjer17y18.php">
                        <img src="img/17y18.jpeg" alt="">
                        <div class="overlay">
                            <h3>Ejercicios 17 y 18</h3>
                            <p>Ejercicio 17: Se ingresan dos números ordenados de menor a mayor, se desea mostrar una lista de todos los números.</p>
                            <p>Ejercicio 18: Se ingresa un número entero, efectuar la sumatoria de todos los números que le anteceden.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="galeria">
                <div class="proyecto">
                    <a href="ejercicios/indexEjer19y20.php">
                        <img src="img/19y20.jpeg" alt="">
                        <div class="overlay">
                            <h3>Ejercicios 19 y 20</h3>
                            <p>Ejercicio 19:  Calcular el promedio general de una lista de 20 números.</p>
                            <p>Ejercicio 20:  Dada una lista de N números calcular su sumatoria.</p>
                        </div>
                    </a>
                </div>
                <div class="proyecto">
                    <a href="ejercicios/indexEjer21y22.php">
                        <img src="img/21y22.jpeg" alt="">
                        <div class="overlay">
                            <h3>Ejercicios 21 y 22</h3>
                            <p>Ejercicio 21: Dada una lista de números calcular su promedio general, el usuario elegiré con cuantos números trabajar.</p>
                            <p>Ejercicio 22: Contar la cantidad de mineros ingresados por el usuario. La lista se corta al Ingresar un 0 o un número negativo.</p>
                        </div>
                    </a>
                </div>
                <div class="proyecto">
                    <a href="ejercicios/indexEjer23y24.php">
                        <img src="img/23y24.jpeg" alt="">
                        <div class="overlay">
                            <h3>Ejercicios 23 y 24</h3>
                            <p>Ejercicio 23: Promediar los números ingresados por un usuario. La lista se corta al ingresar un 0 o un número negativo.</p>
                            <p>Ejercicio 24: Generar los primeros 100 números enteros e indicar si cada uno de ellos es par o impar.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>
<footer>
        <p>&copy; 2024 Mi Sitio Web. Todos los derechos reservados.</p>
        <p>Equipo Dinamita🧨: Esquivel Juan Cruz, Rebollo Facundo</p>
</footer>
</html>
