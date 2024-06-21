<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Búsqueda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Resultados de Búsqueda</h1>
        <?php
        // Obtener el valor de búsqueda desde la URL
        $search_query = isset($_GET['q']) ? $_GET['q'] : '';

        // Simular una búsqueda en tu sistema (aquí deberías conectarte a tu base de datos y realizar la consulta real)
        $elemento_encontrado = false; // Variable para simular si se encontró el elemento
        
        // Simulamos que no se encontró ningún elemento
        if (empty($search_query)) {
            echo '<div class="alert alert-warning" role="alert">No se encontraron resultados con el término de búsqueda.</div>';
        } else {
            echo '<div class="alert alert-info" role="alert">No se encontró ningún elemento con el término de búsqueda: <strong>' . htmlspecialchars($search_query) . '</strong></div>';
        }
        ?>
        <a href="../index.html" class="btn btn-primary">Volver a la página principal</a>
    </div>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>