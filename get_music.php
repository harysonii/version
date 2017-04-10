<?php

session_start();

$con = mysqli_connect("localhost", "root", "", "gothere");
    //check connection...
    if ($con === false) {
        die ("couldn't connect to SQL Server");
    }
    //$dbs = mysqli_select_db($con,"blank") or die("Couldnt connect to database");

if (isset($_SESSION['people_email'])){

  $selectdata = "SELECT * FROM event WHERE event_type = 'music'" ;
    
    $query = mysqli_query($con, $selectdata);
    
    while ($row = mysqli_fetch_array($query)) {
        
        

         echo '<div class="ui fluid card">';
           echo              '<div class="image">';
               echo              '<img src="/images/avatar2/large/kristy.png">';
            echo             '</div>';
               echo          '<div class="content">';
               echo              '<a class="header">'.$row['event_name'].'</a>';
                echo                 '<div class="meta">';
                 echo                    '<span class="date">'.$row['event_name'].'</span>';
                 echo                '</div>';
                 echo            '<div class="description">'.$row['event_email'].'</div>';
                     echo    '</div>';
                     echo    '<div class="extra content">';
                      echo       '<a><i class="thumbs up icon"></i>'.$row['event_type'].'</a>'; 
                      echo       '<a><i class="ticket icon"></i>'.$row['event_type'].'</a>';
                      echo       '<a><i class="share alternate icon"></i>'.$row['event_type'].'</a>';
                      echo       '<a><i class="ban icon"></i>'.$row['event_type'].'</a>';
                            
                       echo  '</div>';
                    echo '</div>' ;


        
        
    }
    
}else {
    echo "You need to sign in";
}

?>