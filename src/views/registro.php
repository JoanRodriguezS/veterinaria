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
        <form action="<?php echo $baseURL; ?>controllers/registro.controller.php" class="form" method="post">
            <div class="form__usuario">
                <label for="">Nombre</label>
                <input type="text" class="usuario" name="fName">
            </div>
            <div class="form__clave">
                <label for="">Apellidos</label>
                <input type="text" class="usuario" name="lName">
            </div>
            <div class="form__usuario">
                <label for="">Nombre de Usuario</label>
                <input type="text" class="usuario" name="username">
            </div>
            <div class="form__usuario">
                <label for="">Dirección de correo electrónico</label>
                <input type="email" class="usuario" name="email">
            </div>
            <div class="form__usuario">
                <label for="">Contraseña</label>
                <input id="clave" type="password" class="clave" name="password">
                <span id="ver" class="ver_clave"><i id="icono" class="fas fa-eye"></i></span>
            </div>
            <div class="form__boton">
                <input class="boton" type="submit" value="Ingresar" name="enviar">
                <button class="boton">Registrarse</button>
            </div>
        
        </form>
    </div>
        
		<!-- Scripts -->
		<?php include('./layouts/script.php'); ?>

</body>

</html>