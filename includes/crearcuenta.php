<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta</title>
    <link rel="stylesheet" href="main1.css">
</head>
<body>
    <from action="grabar.php" method="POST">
    <?php
            if(isset($grabar)){
                echo $grabar;
            }
        ?>
        <h2 class="center">Crear cuenta</h2>
        <p class="center">ingrese nombre de usuario: <br>
        <input type="text" name="username"></p>
        <p class="center">ingrese nombre:<br>
        <input type="text" name="nombre"></p>
        <p class="center">ingrese Password: <br>
        <input type="password" name="password"></p>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>