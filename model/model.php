<?php

//Ma connexion
function  getDB()
{
    //Mes paramètres
    $user = "user_jur";
    $pass = "Prootq8R8cd3CCu3";
    $dbname = "simplon_live_chat_amazin";
    $host = "localhost";

    try {
        $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $dbh = new PDO($dsn, $user, $pass, $options);

        return $dbh;
    } catch (PDOException $e) {
        print "Erreur de connexion !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function findAll()
{
    $db = getDB();

    $query = 'SELECT *
    FROM message 
    ORDER BY date DESC
    ';

    $req = $db->query($query);
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $tab = $req->fetchAll();

    $req->closeCursor();

    return $tab;
}

function addMessage($pseudo, $message)
{
    $db = getDB();
    require('functions/functions.php');

    $pseudo_fe = validate($pseudo);
    $message_fe = validate($message);

    $query = $db->prepare('INSERT INTO message (pseudo, content) VALUES (:pseudo_fe, :message_fe)');
    $query->execute([
        'pseudo_fe' =>  $pseudo_fe,
        'message_fe' => $message_fe
    ]);
}
