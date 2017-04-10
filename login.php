<?php
    session_start();

    $con = mysqli_connect("localhost", "root", "", "gothere");
    //check connection...
    if ($con === false) {
        die ("couldn't connect to SQL Server");
    }
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    $select = "SELECT * FROM people WHERE people_email='$email' and people_password='$password'";

    $data = mysqli_query($con, $select);
     
    
    if($row=mysqli_fetch_array($data))
        {
            $_SESSION['people_email']=$row['people_email'];
                echo "success";
        }
        else
        {
            echo "fail";
        }
        exit();

?>