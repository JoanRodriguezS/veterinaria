<!DOCTYPE html>
<html lang="es">
    <!-- Head-->
    <?php include('./layouts/head.php'); ?>

    <body>
        <!-- nav -->
        <?php include('./layouts/nav.php'); ?>

        <div class="container">
            <div class="logo">
                <img class="logo_img" src="images/LogoVet.png" alt="" width="650">
            </div>
            <form action="<?php echo $baseURL; ?>controllers/login.controller.php" class="form" method="POST">
                <div class="form__usuario">
                    <label for="">Nombre de Usuario</label>
                    <input type="text" class="usuario" name="username">
                </div>
                <div class="form__clave">
                    <label for="">Contraseña</label>
                    <input id="clave" type="password" class="clave" name="password">
                    <span id="ver" class="ver_clave"><i id="icono" class="fas fa-eye"></i></span>
                </div>
                <div class="form__boton">
                    <button class="boton">Ingresar</button>
                    <button class="boton">Registrarse</button>
                </div>
            </form>
        </div>
        <script src="js/main.js"></script>
        
            <!-- Scripts -->
            <?php include('./layouts/script.php'); ?>
    </body>

</html>