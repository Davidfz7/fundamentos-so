<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Life SA</title>
    <link rel="stylesheet" href="../../assets/css/form.css">
</head>

<body>
    <div class="container">
        <div class="title-container">
            <h1>For Life S.A</h1>
        </div>
        <div class="form-div-user">
            <h3 class="h3-user">User Register Login</h3>
            <form action="process_login.php" method="post" id="form-user">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <input id="form-button" class="form-button" type="submit" value="Enviar">
                </div>
            </form>


        </div>
    </div>

</body>

</html>