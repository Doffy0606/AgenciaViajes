<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda de vuelos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <header>
        <h1>Agencia de Viajes</h1>
        <p>Búsqueda de vuelos</p>
    </header>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="vuelos.php">Vuelos</a>
        <a href="hoteles.php">Hoteles</a>
        <a href="reservas.php">Reservas</a>
    </nav>

    <main>
        <h2>Buscar vuelos</h2>

        <form method="POST">

            <label for="origen">Ciudad de origen:</label>
            <input type="text" id="origen" name="origen" required>

            <label for="destino">Ciudad de destino:</label>
            <input type="text" id="destino" name="destino" required>

            <label for="fecha">Fecha del viaje:</label>
            <input type="date" id="fecha" name="fecha" required>

            <button type="submit">Buscar vuelo</button>

        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $origen = htmlspecialchars($_POST["origen"]);
            $destino = htmlspecialchars($_POST["destino"]);
            $fecha = htmlspecialchars($_POST["fecha"]);

            echo "<div class='resultado'>";
            echo "<h3>Datos de búsqueda</h3>";
            echo "<p>Origen: $origen</p>";
            echo "<p>Destino: $destino</p>";
            echo "<p>Fecha: $fecha</p>";
            echo "<p>La búsqueda se realizó correctamente.</p>";
            echo "</div>";
        }
        ?>

    </main>

    <footer>
        <p>Agencia de Viajes &copy; 2026</p>
    </footer>

</body>
</html>