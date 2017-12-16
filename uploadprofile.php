<?php
    session_start();

    $con = mysqli_connect("localhost", "root", "", "gothere");
    //check connection...
    if ($con === false) {
        die ("couldn't connect to SQL Server");
    }

    

   $image = $_FILES['image']['name'];
    $target_dir = "img/profile/";
    $target_file = $target_dir . basename($_FILES['image']['name']);

    //select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $extensions_arr= array("jpg", "jpeg", "png", "gif");
    if (in_array($imageFileType,$extensions_arr)){
        
        $insert = "update people set people_pic = '$image' where people_uname = '" .$_SESSION['people_uname']."'";
            
             //$data = mysqli_query($con, $insert);
         //move_uploaded_file($_FILES['image']['tmp_name'],$target_file.$name);
       
        if($data = mysqli_query($con, $insert))
        {
            
            echo "success";
        }else{
            echo "fail";
        }
        
        move_uploaded_file($_FILES['image']['tmp_name'],$target_file.$name);
        //exit();
       mysqli_close($con);
        
        
    }

?>