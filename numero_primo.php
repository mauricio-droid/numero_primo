<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Números primos</title>
</head>
<body>
    <h1>¿Es número primo?</h1>
    <form method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" required>
        <br>
        <input type="submit" value="Verificar">
    </form>

    <?php
        function esPrimo($numero) {
            if ($numero <= 1) {
                return false;
            }
            // Con la funcion sqrt se verifica la raíz cuadrada
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    return false;
                }
            }
            return true; // Es primo si no se encontró divisor
        }
        // Se envían los datos a traves del método POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];
            if (esPrimo($numero)) {
                echo "<h2>$numero es un número primo.</h2>";
            } else {
                echo "<h2>$numero no es un número primo.</h2>";
            }
        }
    ?>
</body>
</html>