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
                <h2 class="subtitle">Clients Table</h2>
                <a href="form.html" class="add-client">Add Client</a>
                <a href="#" class="modify-client">Modify Client</a>      
            </div>
            <div class="table-design">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>First Surname</th>
                            <th>Second Surname</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        show_client_records();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>

</body>

</html>