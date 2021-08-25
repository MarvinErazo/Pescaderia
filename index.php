<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Venta de Pescados de Alta Mar en Ecuador al por mayor y menos">
    <meta name="keywords" content="Pescaderia,Venta de pescado,Pesca,Mar">
    <meta name="author" content="AI Grupo: Pescaderia" />
    <meta name="copyright" content="Derechos de Autor: Grupo Pescaderia" />
    <title>FisherMan</title>

    <link rel="shortcut icon" href="Imagenes/icono.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


    <!-- De aqui para abajo van los estilos y funciones que le dan estilo de la pagina -->
    <!-- Tambien pueden agregar fuentes de googlefont-->
    <link rel="stylesheet" href="Vista/Estilos/index.css">
    <link rel="stylesheet" href="Vista/Estilos/login.css">

    <script src="Vista/Funciones/index.js"></script>
    <script src="Vista/Funciones/login.js"></script>
    <!-- Todo lo que se diriija a un metodo POST se hace en Controlado -->
    <!-- La Carpeta modelo debe tener las funciones de mostrar,insetar,editar y eliminar ademas de los reportes-->

</head>
<body>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
        Iniciar Sesion
    </button>

    <?php
        include('Vista/HTML-PHP/login.php')
    ?>
</body>
</html>