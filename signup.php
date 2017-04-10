<?php
  
       
       
    $con = mysqli_connect("localhost", "root", "", "gothere");
    //check connection...
    if ($con === false) {
        die ("couldn't connect to SQL Server");
    }
    
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    
    $insert = "INSERT INTO people (people_id, people_name, people_username, people_email, people_password, people_sex) VALUES (NULL, '$name', '$username', '$email', '$password', '$gender')";
    
    $data = mysqli_query($con, $insert);

    if($data)
        {
            
            echo "success";
        }
        exit();

?>