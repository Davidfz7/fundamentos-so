<?php

// Create connection
function connect_to_db(){
	$servername = "localhost";
	$username   = "david";
	$password   = "1234";
	$database   = "forlifeDB"; 
	$conn       = new mysqli($servername, $username,
			   $password,   $database);
	
	if ($conn->connect_error){
		die("Connection failed". $conn->connect_error);
		return "Connection failed";	
	}

	echo "<p>Succesfull connection</p>";
	return	$conn;
}

function close_db_connection(mysqli $conn){
	$conn->close();	
	return "Done";
}
//------------------------------------------------------
//		Functions for user table

function create_user(mysqli $conn, $uname,
	$ufirstsurname, $usecondsurname, $upassword){

	$query = "INSERT INTO user(uname, ufirstsurname, usecondsurname, upassword) VALUES ('$uname', '$ufirstsurname', '$usecondsurname', '$upassword')";
	$valid_query = $conn->query($query);	
	if ($valid_query){
		return "User added!";
	}
	return "create function failed";
}

function retrieve_users(mysqli $conn){
	$query       = "SELECT * FROM user;"; 
	$valid_query = $conn->query($query);
	
	if (!$valid_query){ // I think that this dont have any sense.
		return "Retrieve function failed";
	}
	//Process this array somewhere else.
	return $valid_query;
}
//------------------------------------------------------

//------------------------------------------------------
//		Functions for client table

function create_client(mysqli $conn, $cname, $cfirstsurname, 
	$csecondsurname, $cpassword){

	$query = "INSERT INTO client(cname, cfirstsurname, csecondsurname, cpassword) VALUES ('$cname', '$cfirstsurname', '$csecondsurname', '$cpassword')";
	$valid_query = $conn->query($query);	
	
	if ($valid_query){
		return "User added!";
	}
	
	return "create function failed";
}
function retrieve_clients(mysqli $conn){
	$query 	     = "SELECT * FROM client";
	$valid_query = $conn->query($query);

	if(!$valid_query){
		return "Retrieve function for clientes failed!";	
	}
	return $valid_query;		
}

//------------------------------------------------------


//$conn = connect_to_db(); 

//retrieve($conn);
//close_db_connection($conn);
?>
