<?php
// Start the session
session_start();
require_once('../db_pdo.php');


try {
     print_r($_POST);
        // Retrieve the form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = sha1($_POST["password"]);

        // Prepare the SQL query
        $pdo->beginTransaction();
        $sql = "INSERT INTO users (name, email, mobile,password,user_type,is_active) VALUES (:name, :email, :mobile,:password,2,1)";
        $stmt = $pdo->prepare($sql);

        // Bind the parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->bindParam(':password', $password);
        $pdo->commit();
        // Execute the query
        if ($stmt->execute()) {

            $_SESSION["userEmail"] = $_POST["email"]; 
            $_SESSION["userType"] = 2;  
            // $sql = "INSERT INTO user_role (role_d, user_id) VALUES (:2, :$pdo->lastInsertId())";
            // $stmt = $pdo->prepare($sql);
            
            // $stmt->execute();
             header("location:../pages/dashboard.php");  


        } else {
            echo "Error inserting record.";
            header("location:../pages/register.php");  

        }
    
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>