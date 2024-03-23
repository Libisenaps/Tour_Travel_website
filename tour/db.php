<?php 
    $db_hostname="localhost";
    $db_username="root";
    $db_password="";
    $db_name="travel";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo"Connection Failed:",mysqli_connect_error();
        exit;
    }

?>