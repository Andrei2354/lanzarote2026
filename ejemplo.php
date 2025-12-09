CREATE DATABASE testdb;

USE testdb;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL
);

INSERT INTO users (name, email) VALUES
('Juan Pérez', 'juan@example.com'),
('María López', 'maria@example.com'),
('Carlos Gómez', 'carlos@example.com');


<?php
$servername = "localhost";
$username = "root";
$password = ""; // Cambiar según tu configuración
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>


<?php
include 'db.php';

$action = $_POST['action'] ?? '';

if ($action == 'read') {
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $users = [];
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    echo json_encode($users);

} elseif ($action == 'create') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);
    $stmt->execute();
    echo json_encode(["status" => "success"]);

} elseif ($action == 'update') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $stmt = $conn->prepare("UPDATE users SET name=?, email=? WHERE id=?");
    $stmt->bind_param("ssi", $name, $email, $id);
    $stmt->execute();
    echo json_encode(["status" => "success"]);

} elseif ($action == 'delete') {
    $id = $_POST['id'];
    $stmt = $conn->prepare("DELETE FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    echo json_encode(["status" => "success"]);
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Usuarios con AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>CRUD de Usuarios</h1>

    <h3>Agregar / Editar Usuario</h3>
    <form id="userForm">
        <input type="hidden" id="userId" name="id">
        <input type="text" id="name" name="name" placeholder="Nombre" required>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <button type="submit">Guardar</button>
        <button type="button" id="cancelEdit">Cancelar</button>
    </form>

    <h3>Lista de Usuarios</h3>
    <table border="1" id="usersTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <script>
        $(document).ready(function() {
            // Función para leer todos los usuarios
            function loadUsers() {
                $.ajax({
                    url: 'users_crud.php',
                    type: 'POST',
                    data: {action: 'read'},
                    dataType: 'json',
                    success: function(data) {
                        let rows = '';
                        data.forEach(function(user) {
                            rows += `<tr>
                                <td>${user.id}</td>
                                <td>${user.name}</td>
                                <td>${user.email}</td>
                                <td>
                                    <button class="editBtn" data-id="${user.id}" data-name="${user.name}" data-email="${user.email}">Editar</button>
                                    <button class="deleteBtn" data-id="${user.id}">Eliminar</button>
                                </td>
                            </tr>`;
                        });
                        $("#usersTable tbody").html(rows);
                    }
                });
            }

            loadUsers(); // Cargar usuarios al inicio

            // Crear o actualizar usuario
            $("#userForm").submit(function(e) {
                e.preventDefault();
                const id = $("#userId").val();
                const name = $("#name").val();
                const email = $("#email").val();
                const action = id ? 'update' : 'create';

                $.ajax({
                    url: 'users_crud.php',
                    type: 'POST',
                    data: {action: action, id: id, name: name, email: email},
                    dataType: 'json',
                    success: function(res) {
                        $("#userForm")[0].reset();
                        $("#userId").val('');
                        loadUsers();
                    }
                });
            });

            // Editar usuario
            $(document).on('click', '.editBtn', function() {
                $("#userId").val($(this).data('id'));
                $("#name").val($(this).data('name'));
                $("#email").val($(this).data('email'));
            });

            // Cancelar edición
            $("#cancelEdit").click(function() {
                $("#userForm")[0].reset();
                $("#userId").val('');
            });

            // Eliminar usuario
            $(document).on('click', '.deleteBtn', function() {
                const id = $(this).data('id');
                if(confirm("¿Deseas eliminar este usuario?")) {
                    $.ajax({
                        url: 'users_crud.php',
                        type: 'POST',
                        data: {action: 'delete', id: id},
                        dataType: 'json',
                        success: function(res) {
                            loadUsers();
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
