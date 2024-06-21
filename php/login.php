<?php
require 'db.php';
$db = new Database('db_sys.db');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = :email";
    $stmt = $db->query($query, ['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['nombre'];
        $_SESSION['user_surname'] = $user['apellido'];
        header('Location: logedin.php');
        exit;
    } else {
        echo "Correo electrónico o contraseña inválidos.";
    }
}
?>