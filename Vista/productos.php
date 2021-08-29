<?php
    session_start();
    
    require 'database.php';
     $message ="";

    if(isset($_SESSION['nombre'])){
        $records = $conn->prepare('SELECT nombre FROM usuario WHERE nombre=:nombre');
        $records->bindParam(':nombre',$_SESSION['nombre']);
        $records->execute();
        $result = $records->fetch(PDO::FETCH_ASSOC);
        $usuario = null;

        if(count($result)>0){
            $usuario = $result;
        }
    }

    if(!empty($_POST['nombreP']) && !empty($_POST['cantidad']) && !empty($_POST['precio'])){
        $total = 0;
        $total = floatval($_POST['precio']) * floatval($_POST['cantidad']);
        $sql = "INSERT INTO carrito (nombreU,nombreP,cantidad,total) VALUES (:nombreU,:nombreP,:cantidad,:total)";
        $insert = $conn->prepare($sql);
        $insert->bindParam(':nombreU',$_SESSION['nombre']);
        $insert->bindParam(':nombreP',$_POST['nombreP']);
        $insert->bindParam(':cantidad',$_POST['cantidad']);
        $insert->bindParam(':total',$total);
        $insert->execute();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">

    <title>Document</title>
</head>
<body>
<?php
    require 'partials/header.php'
?>
<p>Prodcutos</p>
    <?php if(!empty($usuario)): ?>
        <?= $usuario['nombre'] ?>
        <button><a href="carrito.php">carrito</a></button>
        <a href="logout.php"><button>Cerrar Sesion</button></a>

    <?php else: ?>
        <a href="login.php"><button>Login</button></a>
        <a href="registrarse.php"><button>Registrarse</button></a>
    <?php endif; ?>
    <a href="productos.php"><button>productos</button></a>
<?php
    include_once("database.php");
    $sql = "SELECT * FROM producto";
    $results = mysqli_query($mysql, $sql) or die("database error:". mysqli_error($mysql));
    while( $record = mysqli_fetch_assoc($results) ) {
?>
    <form action="productos.php" method="post">
        <input type="text" value="<?= $record['nombre'] ?>" name="nombreP" readonly>
        <p><?= $record['descripcion']?></p>
        <input type="number" name="cantidad" placeholder="KG" value="1" min=1>
        <br>
        <label for=""> precio unitario</label>
        <input type="number" value="<?= $record['precio'] ?>" name="precio" readonly>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php
  }  
?>    
<p><?php  echo $message ?></p>
</body>
</html>