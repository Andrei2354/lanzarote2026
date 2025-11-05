<?php

    session_start();

    $_SESSION['usuario'] = $_POST['nombre'];
    
    if($_SESSION['usuario'] != null){
        header("Location: bienvenida.php");
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
        <form action="login.php" method="POST" >
            <div class="mb-3">
            <label for="idNombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="idNombre" placeholder="Nombre..">
            <input type="submit" class="btn btn-primary" />
            </div>
        </form>
            
    </div>
</body>
</html> 
