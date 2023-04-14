<?php

include '../models/users.php';

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $user = getUserInfo($name,$email);

    if ($name === $user['name'] AND $email === $user['email']) {
        echo json_encode($user->fetchAll(PDO::FETCH_ASSOC));
        // return true;
    } else {
       return false;
    }
    
    // echo json_encode($user->fetchAll(PDO::FETCH_ASSOC));
}

?>