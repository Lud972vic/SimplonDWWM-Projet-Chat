<?php

//Ma connexion
function  getDBConnection()
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
    getDBConnection();

    $query = 'SELECT *
    FROM message 
    ORDER BY date DESC
    ';

    $req = getDBConnection()->query($query);
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $tab = $req->fetchAll();

    $req->closeCursor();

    return $tab;
}
