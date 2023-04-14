<?php

// Connexion à la base de données
function dbConnect(){
    try{
        $db = new PDO('mysql:host=localhost;dbname=crud;charset=utf8', 'djibril', 'tamou');
        return $db;
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
}

// Récuếrer tous les user
function getUsers(){
    $db = dbConnect();

    $req = $db->query('SELECT * FROM crud ');
    $req->execute();
    return $req;
}


//Recuérer un user
function getUser($id){
    $db = dbConnect();

    $req = $db->prepare('SELECT * FROM crud WHERE id = ?');
    $req->execute(array($id));
    $user = $req->fetch();

    return $user;
}


//Recuérer un user info
function getUserInfo($name,$email){
    $db = dbConnect();

    $req = $db->prepare('SELECT * FROM crud WHERE name = ? AND email = ?');
    $req->execute(array($name,$email));
    $user = $req->fetch();

    return $user;
}


//Recuérer un user
function addUser($donnees){
    $db = dbConnect();

    $req = $db->prepare('INSERT INTO crud(name,email,phone,city) VALUES(?,?,?,?);');

    if($req->execute(array($donnees['name'], $donnees['email'], $donnees['phone'], $donnees['city'])))
        return true;
    else
        return false;
}

//supprimer un user
function delUser($id){
    $db = dbConnect();

    $req = $db->prepare('DELETE FROM crud WHERE id = ?');

    if($req->execute(array($id)))
        return true;
    else
        return false;
}

//modifier une user
function updateUser($post){
    $db = dbConnect();

    $req = $db->prepare('UPDATE crud SET name = ?, email = ?, phone = ?, city = ? WHERE id = ?');

    if($req->execute(array($post['name_u'], $post['email_u'], $post['phone_u'], $post['city_u'], $post['id_u'])))
        return true;
    else
        return false;
}

