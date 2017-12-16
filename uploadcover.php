<?php
    session_start();


// Create connection
$conn = new mysqli("localhost", "root", "", "gothere");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("update people set people_cover = ? where people_uname = '" .$_SESSION['people_uname']."'" );
$stmt->bind_param("s", $image);

// set parameters and execute

 $image = $_FILES['image']['name'];
    $target_dir = "img/cover/";
    $target_file = $target_dir . basename($_FILES['image']['name']);

    //select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $extensions_arr= array("jpg", "jpeg", "png", "gif");
    if (in_array($imageFileType,$extensions_arr)){
     $stmt->send_long_data(   move_uploaded_file($_FILES['image']['tmp_name'],$target_file.$name));
   $stmt->execute();     
        
if($stmt->affected_rows == 1){
    echo "success";
}
exit();
//move_uploaded_file($_FILES['image']['tmp_name'],$target_file.$name);

        $stmt->close();
$conn->close();
        
    }

?>