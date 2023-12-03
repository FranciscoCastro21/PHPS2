<?php

declare(strict_types=1);
 
function get_username(object $pdo, $username){

    $query = "SELECT username FROM user where username - :username;"; 
    $stmt = $pdo ->prepare($query);
    $stmt->binParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
