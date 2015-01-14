<?php

// MySQL Basic DB Connection Example

// Database Connection Variables

 $hostname = "[hostname]";
 $username = "[username]";
 $password = "[password]";
 $database = "[database]";

 $mysqli = new mysqli($hostname, $username, $password, $database);

// Test The Connection

if (mysqli_connect_errno()) 
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{

// If the database is connected, let the user know.

 printf("Database connected!");

// Close the connection we are no longer using.

 mysqli_close($mysqli);
 exit();

}

?>

