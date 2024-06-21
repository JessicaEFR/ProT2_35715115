<?php
require 'db.php';
$db = new Database('db_sys.db');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = "INSERT INTO users (nombre, apellido, email, usuario, password) VALUES (:nombre, :apellido, :email, :usuario, :password)";
    try {
        $db->query($query, ['nombre' => $nombre,'apellido' => $apellido, 'email' => $email,'usuario' => $usuario, 'password' => $password]);
        echo "Usuario registrado con éxito!";
        header('Location: ../login.html');
        exit;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>