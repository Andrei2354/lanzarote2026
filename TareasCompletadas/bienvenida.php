<?php

session_start();
if($_SESSION['usuario'] == null){
    header("Location: login.php");
}
$idioma = $_COOKIE['idioma'];
echo "Usuario en sesión: " . $_SESSION['usuario'];
echo "Usuario en sesión: " . $idioma;

// <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
// <a href="logout.php"><i style="color:#0d6efd;font-size:35px" class="bi bi-door-open"></i></a> 
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
    <div>
        <a href="configuracion_idioma.php"> Cambio de idioma</a>   
    </div>
</body>
</html> 

https://drive.google.com/drive/folders/1znj3jHbBgF5Jqfz6gRF4cbYeHm1J3lH_?usp=sharing 