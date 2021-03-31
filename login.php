<?php include "header.php" ?>
<body class="bg-secondary">

<div class="login-card py-2 px-3 text-center">
    <!--<img src="img/logo-gerdau-es-mx-azul.png" width="150px">-->
    <br>
    <h3 style="color: #003366;">INGRESO VEHICULAR AUTOMÁTICO</h3>
    <h4>Acceso de usuarios</h4>
    <hr>
    <div class="form-group mb-4">
        <label for="txtUsuario"><i class="fa fa-user mr-2" aria-hidden="true"></i> Usuario</label>
        <input type="text" name="" id="txtUsuario" class="form-control text-center" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Escribe tu correo o usuario de red</small>
    </div>
    <div class="form-group mb-4">
        <label for="txtContrasenia"><i class="fa fa-key mr-2" aria-hidden="true"></i> Contraseña</label>
        <input type="password" name="" id="txtContrasenia" class="form-control text-center" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Escribe tu contraseña</small>
    </div>
    <button type="button" name="" id="btnLogIn" class="btn btn-primary btn-sm btn-block" onclick="login()"><i class="fa fa-sign-in mr-2" aria-hidden="true"></i> Ingresar</button>
</div>
    
    

<?php include "footer.php" ?>
