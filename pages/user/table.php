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
                <a href="#" class="modify-client">Modify User</a>      
                <a href="../client/table.php" class="table-client-btn">Client Table</a>        
            </div>

            <div class="table-design">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>First Surname</th>
                            <th>Second Surname</th>
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


    </div>

</body>

</html>