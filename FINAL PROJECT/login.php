<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/dbh.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($email) {
        
        if (password_verify($_POST["user_password"], $user["user_password"])) {
            
            
           
        session_start();
            
            
            header("Location: ../navigtion/updates.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
