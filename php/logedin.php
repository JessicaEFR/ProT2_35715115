<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Si no hay una sesión iniciada, redirige al usuario al formulario de inicio de sesión
    header('Location: ../login.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Usuario Logeado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <!-- Navbar -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../img/logo.png" width="30" height="30" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.html">Principal</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="../quienes_somos.html">Quiénes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../acerca_de.html">Acerca de</a>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="form-inline">
                            <form action="busqueda.php" method="GET">
                                <input class="form-control mr-sm-2" type="search" name="busqueda" placeholder="Buscar"
                                    aria-label="Buscar">
                        </div>
                        <div>
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container mt-5">
        <?php if (isset($_SESSION['user_name'])): ?>
            <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['user_name'] . ' ' . $_SESSION['user_surname']); ?>!</h1>
        <?php else: ?>
            <h1>Bienvenido, usuario desconocido!</h1>
        <?php endif ?>
        <p>Has iniciado sesión exitosamente.</p>
        <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
    </div>
</body>

</html>