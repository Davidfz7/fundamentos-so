<?php
require_once('../../includes/dbconfig.php');

function process_info()
{   
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username      = $_POST['username'];
        $name          = $_POST['name'];
        $firstsurname  = $_POST['first_surname'];
        $secondsurname = $_POST['second_surname'];
        $password      = $_POST['password'];
        echo $username;
        $conn = connect_to_db();
        if (user_exists($conn, $username)) { 
            return false;
        } 
        create_user($conn, $username, $name, $firstsurname, $secondsurname, $password);
        close_db_connection($conn);
        return true; 
    }
    return true;
}

$is_valid = process_info();
if ($is_valid){
   header("Location: table.php");
   exit; 
}else{
    header("Location: form.php");
    exit;    
}

?>
