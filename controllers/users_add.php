<?php

require '../models/users.php';

//  $email_result = getUserInfo($_POST['data']);
//  $email_match = $email_result->rowCount()->fetchAll();

//  if ($email_match > 0) {
//         echo json_encode(array("statusCode"=>400));
//  } else {
//     $result = addUser($_POST);

//     if ($result) {
//         echo json_encode(array("statusCode"=>200));
//     } 
//     else {
//         return false;
//         //echo "<script>alert('Erreur d\'insersion')</script>";
//     }
//  }
 
 $result = addUser($_POST);

if ($result) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    return false;
    //echo "<script>alert('Erreur d\'insersion')</script>";
}

?>