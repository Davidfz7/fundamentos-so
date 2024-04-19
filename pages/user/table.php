<?php
require_once('../../includes/dbconfig.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Life S.A</title>
    <link rel="stylesheet" href="../../assets/css/tablestyle.css">
</head>

<body>
    <div class="container">
        <div class="title-container">
            <h1>For Life S.A</h1>
        </div>
        <div class="table-container">
            <div class="table-actions">
                <h2 class="subtitle">Users Table</h2>
                <a href="form.php" class="add-client">Add User</a>
                <a href="../client/table.php" class="table-client-btn">Client Table</a>
            </div>

            <div class="table-design">
                <table id="user-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>First Surname</th>
                            <th>Second Surname</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        show_user_records();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="dialog-div" class="dialog-div">
            <dialog id="dialog-popup" class="dialog-popup">
                <div class="form-div-user">
                    <h3 class="h3-user"></h3>
                    <form action="process_form.php" method="post" id="form-user">
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="text" id="id" name="id" readonly value="23">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="first_surname">First Surname</label>
                            <input type="text" id="first_surname" name="first_surname" required>
                        </div>
                        <div class="form-group">
                            <label for="second_surname">Second Surname:</label>
                            <input type="text" id="second_surname" name="second_surname" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <input id="form-button" class="form-button" type="submit" value="Submit">
                        </div>
                    </form>

                </div>

            </dialog>
        </div>
    </div>
    <script src="../../assets/js/script.js"></script>
</body>

</html>