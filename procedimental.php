<?php
$servidor = "localhost";
$usuario = "lanzarote";
$contraseña = "2354";
$base_datos = "gestion_usuarios";
$conexion = mysqli_connect($servidor, $usuario, $contraseña,$base_datos);
if (!$conexion) {
die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";

function mostrarUsuarios($conexion){
    $sql = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        echo "<section width='200px'>";
        echo '<table class="table table-bordered">';
        echo '<thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">email</th>
                    <th scope="col">edad</th>
                </tr>
              </thead>';
        echo '<tbody>';

        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo '<tr>';
            echo '<th scope="row">' . $fila['id'] . '</th>';
            echo '<td>' . htmlspecialchars($fila['nombre']) . '</td>';
            echo '<td>' . htmlspecialchars($fila['email']) . '</td>';
            echo '<td>' . htmlspecialchars($fila['edad']) . '</td>';
            echo '</tr>';
        }

        echo '</tbody></table></section>';
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }
}
function añadirUsuarios($conexion){
    $nombre = "Alberto";
    $correo = "alberto@example.com";
    $edad = "23";
    $sql = "INSERT INTO usuarios (nombre, email, edad) VALUES ('$nombre',
    '$correo', '$edad')";
    if (mysqli_query($conexion, $sql)) {
    echo "Nuevo registro creado exitosamente";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
    
}
mostrarUsuarios($conexion);
// añadirUsuarios($conexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedimental    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputAge">Edad</label>
    <input type="age" class="form-control" id="exampleInputAge" placeholder="Age">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</body>
</html> 