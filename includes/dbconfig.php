<?php
function connect_to_db()
{
    $servername = "localhost";
    $username   = "david";
    $password   = "1234";
    $database   = "forlifeDB";
    $conn       = new mysqli(
        $servername,
        $username,
        $password,
        $database
    );
    if ($conn->connect_error) {
        die("Connection Failed" . $conn->connect_error);
        return "Connection Failed";
    }
    return $conn;
}

function close_db_connection(mysqli $conn)
{
    $conn->close();
    return "Closed DB connection";
}
//------------------------------------------------------------------------------------------------
//                                      Functions for user table
function create_user(
    mysqli $conn,
    $uusername,
    $uname,
    $ufirstsurname,
    $usecondsurname,
    $upassword
) {
    $query = "INSERT INTO user(uusername, uname, ufirstsurname, usecondsurname, upassword) VALUES" .
        "('$uusername', '$uname', '$ufirstsurname', '$usecondsurname', '$upassword')";

    try {
        $conn->query($query);
    } catch (Exception $e) {
        echo "Couldn't add new user! " . $e . "\n";
        return "Couldn't add new user!";
    }
    echo "User added succesfully!\n";
    return "User added succesfully!";
}
function retrieve_users(mysqli $conn)
{
    $query = "SELECT * FROM user;";
    //This is returning an array with all the users
    $users  = $conn->query($query);
    return $users;
}
function show_user_records()
{
    $conn  = connect_to_db();
    $users = retrieve_users($conn);
    while ($row = $users->fetch_assoc()) {
        $id             = $row["id"];
        $uusername      = $row["uusername"];
        $uname          = $row["uname"];
        $ufirstsurname  = $row["ufirstsurname"];
        $usecondsurname = $row["usecondsurname"];
        echo "<tr><td>" . $id . "</td><td>" . $uusername . "</td><td>". $uname .
            "</td><td>" . $ufirstsurname . "</td><td>" . $usecondsurname . '</td>
            <td>
             <a href="#" onclick="handleClick();" ><img src="../../assets/imgs/compose.png" id="img-edit"></a>             
             <a href="#"><img src="../../assets/imgs/trash.png" id="img-delete"></a> 
             </td></tr>';
    }
    close_db_connection($conn);
}

function user_exists(mysqli $conn, $username)
{
    $query       = "SELECT * FROM user WHERE uusername = '$username'";
    $result      = $conn->query($query);
    if(!$result->num_rows){
        return false;
    }
    return true;
}

function login_user(mysqli $conn, $username, $password){
    $query  = "SELECT * FROM user WHERE uusername = '$username' AND  upassword = '$password';";
    $result = $conn->query($query);
    if(!$result->num_rows){
        return false;
    }
    return true;
}
//------------------------------------------------------------------------------------------------
//                                     Functions for client table
function create_client(
    mysqli $conn,
    $cname,
    $cfirstsurname,
    $csecondsurname,
    $cpassword
) {
    $query = "INSERT INTO client(cname, cfirstsurname, csecondsurname, cpassword) VALUES" .
        "('$cname', '$cfirstsurname', '$csecondsurname', '$cpassword')";

    try {
        $conn->query($query);
    } catch (Exception $e) {
        echo "Couldn't add new client! " . $e . "\n";
        return "Couldn't add new client!";
    }
    echo "Client added succesfully!\n";
    return "Client added succesfully!";
}
function retrieve_clients(mysqli $conn)
{
    $query  = "SELECT * FROM client;";
    //This is returning an array with all the client return $query;
    $clients = $conn->query($query);
    return $clients;
}

function show_client_records()
{
    $conn  = connect_to_db();
    $clients = retrieve_clients($conn);
    while ($row = $clients->fetch_assoc()) {
        $cid             = $row["cid"];
        $cname           = $row["cname"];
        $cfirstsurname   = $row["cfirstsurname"];
        $csecondsurname  = $row["csecondsurname"];
        echo "<tr><td>" . $cid . "</td><td>" . $cname .
            "</td><td>" . $cfirstsurname . "</td><td>" . 
            $csecondsurname . "</td></tr>";
    }
    close_db_connection($conn);
}
//------------------------------------------------------------------------------------------------




