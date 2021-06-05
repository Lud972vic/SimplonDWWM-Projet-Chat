<?php

//Ma connexion
function getDBConnection(): PDO
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
        return new PDO($dsn, $user, $pass, $options);
    } catch (PDOException $e) {
        print "Erreur de connexion !: " . $e->getMessage() . "<br/>";
        die();
    }
}
