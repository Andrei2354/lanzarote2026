<?php
    $patronNombre= "/^([a-zA-Z]+).{5,20}$/";
    $patronNumero= "/^[0-9]{9,15}$/";
    $patronCorreo = "/^[\w\-\.]+@([\w\-]+\.)+[a-zA-Z]{2,7}$/";

    if ($_POST['nombre'] != ''){
        if(preg_match($patronNombre, $_POST['nombre'])){
            echo "valido ";
        }else echo "No es valido el nombre: {$_POST['nombre']}";
    }
    if ($_POST['numero'] != ''){
        if(preg_match($patronNumero, $_POST['numero'])){
            echo "valido ";
        }else echo "No es valido el numero: {$_POST['numero']}";
    }
    if($_POST['correo'] != ''){
        if(preg_match($patronCorreo, $_POST['correo'])){
            echo "valido ";
        }else echo "No es valido el correo:{$_POST['correo']}";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>


    <div class="container">
        <?php echo $mensaje; ?>
        <form action="examen.php" method="POST" >
            <div class="mb-3">
            <label for="idNombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="idNombre" placeholder="Nombre..">
            </div>
            <div class="mb-3">
            <label for="idNumero" class="form-label">Número</label>
            <input type="text" name="numero" class="form-control" id="idNumero" placeholder="Número..">
            </div>
            <div class="mb-3">
            <label for="idCorreo" class="form-label">Correo</label>
            <input type="text" name="correo" class="form-control" id="idCorreo" placeholder="Correo..">
            </div>
            <input type="submit" class="btn btn-primary" />
        </form>
            
    </div>
</body>
</html> 
