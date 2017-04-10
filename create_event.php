<?php

$con = mysqli_connect("localhost", "root", "", "gothere");
    //check connection...
    if ($con === false) {
        die ("couldn't connect to SQL Server");
    }

    $title = $_POST["title"];
    $description = $_POST["description"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $type = $_POST["type"];
    $host = $_POST["host"];
    $cohost = $_POST["cohost"];

    $insert = "INSERT INTO event (event_id, event_name, event_description, event_phone, event_email, event_type, event_host_id, event_cohost_id) VALUES (NULL, '$title', '$description', '$phone', '$email', '$type', '$host', '$cohost')";
  
    $data = mysqli_query($con, $insert);

    if($data) {
        
        echo "success";
    }
exit();
?>