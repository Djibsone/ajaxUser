<?php

require '../models/users.php';

//if (isset($_POST['delete'])) {

    /*if (isset($_POST['user_id'])) {

        $id = $_POST['user_id'];

        //  delUser($id);
        $result = delUser($id);

        if ($result) {
            // echo json_encode(array("statusCode"=>200));
            return true;
        } 
        else {
            return false;
            // echo json_encode(array("statusCode"=>201));
        }
    }*/
       
//}

/*if (isset($_GET['del'])) {

	$id = $_GET['del'];
	$result = delUser($id);
	if ($result) {
		echo "<script>alert('Bien supprimé!'); window.location = '../views/users.php'</script>";
		//$_SESSION['message'] = "Bien supprimé!"; 
		//header('location: ../views/entropot.php');
	}else{
		echo "<script>alert('Impossible de supprimer ! , car cet entropot contient des agents'); window.location = '../views/users.php'</script>";
		//$_SESSION['message'] = "Impossible de supprimer ! , car cet entropot contient des agents"; 
		//header('location: ../views/entropot.php');
	}
			
}*/


/*if (isset($_POST['delete'])) {

    $id = $_POST['id_d'];

    //  delUser($id);
    $result = delUser($id);

    if ($result) {
		echo "<script>alert('Bien supprimé!'); window.location = '../views/users.php'</script>";   
    } 
    else {
        echo "<script>alert('Erreur de suppression!'); window.location = '../views/users.php'</script>";
    }
   
       
}*/


if (isset($_POST['id'])) {

    $id = $_POST['id'];

    //delUser($id);
    $result = delUser($id);

    if ($result) {
        echo json_encode(array("statusCode"=>200));
        // return true;
    } 
    else {
        return false;
        // echo json_encode(array("statusCode"=>201));
    }
}
   
?>