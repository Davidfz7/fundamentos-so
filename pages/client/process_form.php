<?php
require_once('../../includes/dbconfig.php');
function process_info(){
    $name          = $_POST['name'];
    $firstsurname  = $_POST['first_surname'];
    $secondsurname = $_POST['second_surname'];
    $password      = $_POST['password'];

    echo $name . $firstsurname . $secondsurname .$password;
    $conn = connect_to_db();
    create_client($conn, $name, $firstsurname, $secondsurname, $password);
    close_db_connection($conn);
}
process_info();
header("Location: table.php");
exit;
?>


