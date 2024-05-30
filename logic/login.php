
<?php
session_start();
require_once('../db_pdo.php');


try {

    $hashed_pass=sha1($_POST["password"]);
    echo $hashed_pass;
    $query = "SELECT * FROM users WHERE email = :email AND password = :password AND is_active=1";  
    $statement = $pdo->prepare($query);  
    $statement->execute(  
         array(  
              'email'     =>     $_POST["email"],  
              'password'     =>     $hashed_pass  
         )  
    );  

    $count = $statement->rowCount();  
    if($count > 0)  
    {  
     $user = $statement->fetch(PDO::FETCH_ASSOC);
     
     $_SESSION["userEmail"] = $_POST["email"];  
     $_SESSION["userType"] = $user['user_type'];  
     $_SESSION["userId"] = $user['id'];  
     header("location:../pages/dashboard.php");  
    }  
    else  
    {  
          header("location:../pages/login.php");  

    } 
} catch (\Throwable $th) {
    throw $th;
} 