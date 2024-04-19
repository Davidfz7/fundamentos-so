<?php

require_once('../../includes/dbconfig.php');

function process_info()
{   
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username      = $_POST['username'];
        $password      = $_POST['password'];
        $conn = connect_to_db();
        if (login_user($conn, $username, $password)) { 
            return true;
        } 
        close_db_connection($conn); 
    }
    return false;
}

$is_valid = process_info();
if ($is_valid){
   header("Location: table.php");
   exit; 
}else{
    header("Location: login.php");
    exit;    
}

?>