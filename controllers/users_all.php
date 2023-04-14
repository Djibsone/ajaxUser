<?php

include '../models/users.php';

$users = getUsers();

echo json_encode($users->fetchAll(PDO::FETCH_ASSOC)); // PDO::FETCH_OBJ

?>