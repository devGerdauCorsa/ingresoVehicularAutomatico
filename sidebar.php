<?php 
    session_start();
    $_SESSION["tipoUsuario"] = 1; //0: Administrador, 1: Vigilante ... linea de prueba, ¡Comentar!
?>

<!-- Sidebar -->
<div class="bg-primary border-right text-white" id="sidebar-wrapper">
    <div class="sidebar-heading text-center"><i class="fas fa-truck-moving fa-2x py-2"></i></div>
    <div class="list-group list-group-flush">
        <!-- Opciones de Administrador -->
        <?php
            if($_SESSION["tipoUsuario"] == 1){
                echo "<a href='#' id='item-dashboard' class='list-group-item list-group-item-action bg-primary text-white'><i class='fas fa-tachometer-alt mr-2'></i>Dashboard</a>";
            }
        ?>
        <?php
            if($_SESSION["tipoUsuario"] == 1){
                echo "<a href='#' id='item-usuarios' class='list-group-item list-group-item-action bg-primary text-white'><i class='fas fa-users mr-2'></i>Usuarios</a>";
            }
        ?>
        <?php
            if($_SESSION["tipoUsuario"] == 1){
                echo "<a href='#' id='item-proveedores' class='list-group-item list-group-item-action bg-primary text-white'><i class='fas fa-user-tie mr-2'></i>Proveedores</a>";
            }
        ?>
        <?php
            if($_SESSION["tipoUsuario"] == 1){
                echo "<a href='#' id='item-entradas' class='list-group-item list-group-item-action bg-primary text-white'><i class='fas fa-calendar mr-2'></i>Entradas</a>";
            }
        ?>
        <?php
            if($_SESSION["tipoUsuario"] == 1){
                echo "<a href='#' id='item-chatarras' class='list-group-item list-group-item-action bg-primary text-white'><i class='fas fa-recycle mr-2'></i>Chatarras</a>";
            }
        ?>
        <?php
            if($_SESSION["tipoUsuario"] == 1){
                echo "<a href='#' id='item-unidades' class='list-group-item list-group-item-action bg-primary text-white'><i class='fas fa-truck mr-2'></i>Unidades</a>";
            }
        ?>
        <!-- Opciones de Vigilante -->
        <?php
            if($_SESSION["tipoUsuario"] == 0){
                echo "<a href='#' id='item-dashboard-vigilante' class='list-group-item list-group-item-action bg-primary text-white'><i class='fas fa-tachometer-alt mr-2'></i>Dashboard</a>";
            }
        ?>
        <?php
            if($_SESSION["tipoUsuario"] == 0){
                echo "<a href='#' id='item-recepcion' class='list-group-item list-group-item-action bg-primary text-white'><i class='fas fa-tasks mr-2'></i>Recepción</a>";
            }
        ?>
         <?php
            if($_SESSION["tipoUsuario"] == 0){
                echo "<a href='#' id='item-entradas-vigilante' class='list-group-item list-group-item-action bg-primary text-white'><i class='fas fa-calendar mr-2'></i>Entradas</a>";
            }
        ?>
    </div>
</div>
<!-- /#sidebar-wrapper -->