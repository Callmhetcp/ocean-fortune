<?php

    session_start();


    include 'connection.php';



    $qry = "SELECT * FROM users";

    $sql = mysqli_query($conn,$qry);



    if ($sql) {
        // display selected records
        
        $num = mysqli_num_rows($sql);
        
        
        while ($num --) {
        
            $fetch = mysqli_fetch_assoc($sql);
            $id = $fetch ['id'];
            $firstname = $fetch ['firstname']."&nbsp;";
           $lastname = $fetch ['lastname'];
           $email = $fetch ['email'];
           $nationality = $fetch ['nationality'];

           $_SESSION['ID'] = $id;

            
      }

    } else {
        
        echo "Selection error";
    }
    



?>