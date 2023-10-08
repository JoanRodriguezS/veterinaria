<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal land</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="icon" href="images/logo.png">
</head>

<body>
    <nav id="nav">
        <ul>
            <li class="current"><a href="index.html">Inicio</a></li>
            <li>
                <a href="#">Tienda</a>
                <ul>
                    <li><a href="#">Comida</a>
                        <ul>
                            <li><a href="#">Mimaskot</a></li>
                            <li><a href="#">Ricocan</a></li>
                            <li><a href="#">Dog Chow</a></li>
                            <li><a href="#">Pedigree</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Medicina</a></li>
                    <li><a href="#">Juguetes</a></li>
                    <li><a href="#">Ropa</a></li>
                </ul>
            </li>
            <li><a href="servicio.html">Servicios</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contacto.html">Contacto</a></li>
            <li><a href="login.html">Cuenta</a>
                <ul>
                    <li><a href="">Encargado</a></li>
                    <li><a href="">Usuario</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="logo">
            <img class="logo_img" src="images/LogoVet.png" alt="" width="650">
        </div>
        <form action="" class="form">
            <div class="form__usuario">
                <label for="">Usuario</label>
                <input type="text" class="usuario">
            </div>
            <div class="form__clave">
                <label for="">Contraseña</label>
                <input id="clave" type="password" class="clave">
                <span id="ver" class="ver_clave"><i id="icono" class="fas fa-eye"></i></span>
            </div>

            <div class="form__usuario">
                <label for="">Usuario</label>
                <input type="text" class="usuario">
            </div>
            <div class="form__usuario">
                <label for="">Usuario</label>
                <input type="text" class="usuario">
            </div>
            <div class="form__boton">
                <button class="boton">Ingresar</button>
                <button class="boton">Registrarse</button>
            </div>
        </form>
    </div>
    
    <script src="js/main.js"></script>
    
		<!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
</body>

</html>