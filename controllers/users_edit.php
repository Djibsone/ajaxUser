<?php

require '../models/users.php';


 $result = updateUser($_POST);

if ($result) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    return false;
    //echo "<script>alert('Erreur d\'insersion')</script>";
}

?>