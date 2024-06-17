<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>👨‍💻Sobre Nosotros</title>
    <link rel="stylesheet" href="style_sobrenosotros.css">
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
                                <a href="ejercicios/indexEjer5y6.php">Ejercicios 5 y 6</a>
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
    
    <section id="sobre-nosotros">
        <h2>Nuestra Historia</h2>
        <h3>Somos un equipo apasionado por la tecnología y el desarrollo web.</h3>
        <div class="equipo">
            <div class="miembro">
                <img src="img/WhatsApp Image 2024-05-26 at 21.18.27.jpeg" alt="Tu Nombre">
                <h3><a>Rebollo Facundo</a></h3>
                <p>Desarrollador Web con experiencia en PHP, HTML, CSS y JavaScript. Apasionado por la creación de soluciones innovadoras y funcionales. En este proyecto, me he encargado de la programación del backend y la integración de las funciones de resolucion de ejercicios.</p>
                <a href="https://github.com/facuZabala" class="btn">GitHub</a>
            </div>
            <div class="miembro">
                <img src="img/WhatsApp Image 2024-05-26 at 21.17.04.jpeg" alt="Nombre del Compañero">
                <h3><a>Esquivel Juan Cruz</a></h3>
                <p>Especialista en Frontend con habilidades en HTML, CSS, y diseño gráfico. En este proyecto, he trabajado en la interfaz de usuario, asegurando que la experiencia sea intuitiva y agradable para los usuarios.</p>
                <a href="https://github.com/shoncruz" class="btn">GitHub</a>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Mi Sitio Web. Todos los derechos reservados.</p>
        <p>Equipo Dinamita🧨: Esquivel Juan Cruz, Rebollo Facundo</p>
    </footer>
</body>
</html>