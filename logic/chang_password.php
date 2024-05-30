<?php
// Start the session
session_start();
require_once('../db_pdo.php');
 

try {
     print_r($_POST);
        // Retrieve the form data 
        $password = sha1($_POST["password"]);
 
        // Prepare the SQL query
        $pdo->beginTransaction();
        $sql = "UPDATE `users` SET password =? where id=?";
        $stmt = $pdo->prepare($sql);
 
        if ($stmt->execute([$password,$_SESSION['userId']])) {
 
             header("location:../pages/dashboard.php");  
        } else {
            header("location:../pages/dashboard.php");  

        }
    
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>