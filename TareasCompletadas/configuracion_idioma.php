<?php
// unset($_SESSION["usuario"]);
$idioma = $_POST['idioma'];
setcookie("idioma", $idioma, time() + 3600); 
if (isset($_COOKIE['idioma'])) {
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
        <form action="configuracion_idioma.php" method="POST" >
                <select name="idioma">
                    <option value="Espanol">Español</option>
                    <option value="Ingles">Ingles</option>
                    <option value="Frances">Frances</option>
                </select>
                <input type="submit" value="Enviar" />
            </div>
        </form>
            
    </div>
</body>
</html> 
