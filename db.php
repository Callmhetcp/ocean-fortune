<?php


    include 'connection.php';

    #to create a db 

    // $query = "CREATE DATABASE oceanfortune_db";
    // $sql = mysqli_query($conn, $query);


    // if ($sql) {
    //     echo "db created";
    
    // }else{

    //     echo "DB creation error!!";
    // }

  


    #code to create table

    // $qry = "CREATE TABLE `transactions` (
    //     `id` INT AUTO_INCREMENT PRIMARY KEY,
    //     `trx` INT NOT NULL,
    //     `amount` DECIMAL(10, 2) NOT NULL,
    //     `transaction_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    //     `status` VARCHAR(50) NOT NULL,
    //     `transaction_type` VARCHAR(50) NOT NULL       
    // )";

    #code to alter tab

    // $qry = "ALTER TABLE transactions
    // ADD coin VARCHAR(50) NOT NULL,
    // ADD wallet_address VARCHAR(255) NOT NULL
    // ;
    // ";
    
    


    // $sql = mysqli_query($conn, $qry);

    // if ($sql) {
        
    //     echo 'Table created';
    // }else {
        
    //     echo "error";
    // }

    #insert into table

    // $qry = "INSERT INTO users (id,firstname, lastename, email, password)
    // VALUES (1 'Obinna', 'Ojo', 'dannywiz@gmail','1234')";

    // $sql = mysqli_query($conn, $qry);

    // if ($sql) {
    //     echo 'Details inserted';
    // }else {
        
    //     echo "error";
    // }


    #update details

    // $qry = "UPDATE new_users SET id=1 WHERE id=0";

    // $sql = mysqli_query($conn,  $qry);

    // if ($sql) {
    //     echo 'Updated';
    // } else {
        
    //     echo "error";
    // }

    #delete data

    // $qry = "DELETE FROM users WHERE id=4";

    // $sql = mysqli_query($conn,  $qry);

    // if ($sql) {
    //     echo 'deleted';
    // } else {
        
    //     echo "error";
    // }

    #drop table


    // $qry = "DROP TABLE quontatrade_db";

    // $sql = mysqli_query($conn,  $qry);

    // if ($sql) {
    //     echo 'table dropped';
    // } else {
        
    //     echo "error";
    // }

    #drob data base

//   $qry = "DROP DATABASE quontatrade_db";

//   $sql = mysqli_query($conn,  $qry);

//   if ($sql) {
//       echo 'database dropped';
//   } else {
      
//       echo "error";
//   }


// Name of the table you want to delete
// $table_name = 'transactions'; // Replace with the table name you want to delete

// // SQL query to delete the table
// $sql = "DROP TABLE IF EXISTS $table_name"; // Deletes the table if it exists

// // Execute the query
// if (mysqli_query($conn, $sql)) {
//     echo "Table '$table_name' has been deleted successfully.";
// } else {
//     echo "Error deleting table: " . mysqli_error($conn);
// }

    



?>