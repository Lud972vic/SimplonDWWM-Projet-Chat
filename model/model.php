<?php

require('bdd_connection.php');

function findAll(): array
{
    $db = getDBConnection();

    $query = 'SELECT *
    FROM message 
    ORDER BY id DESC
    ';

    $req = $db->query($query);
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $messages = $req->fetchAll();

    $req->closeCursor();

    return $messages;
}

function addMessage(string $pseudo, string $message): void
{
    $db = getDBConnection();

    $query = $db->prepare('INSERT INTO message (pseudo, content) VALUES (:pseudo_fe, :message_fe)');
    $query->execute([
        'pseudo_fe' =>  $pseudo,
        'message_fe' => $message
    ]);
}

function findAllMessagesByKeyword(string $search = null): array
{
    $db = getDBConnection();

    $query = 'SELECT *
    FROM message 
    WHERE content LIKE :search
    OR pseudo LIKE :search
    ORDER BY id DESC
    ';

    $req = $db->prepare($query);
    $req->bindValue(':search', "%" . $search . "%", PDO::PARAM_STR);
    $req->execute();
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $messages = $req->fetchAll();

    $req->closeCursor();

    return $messages;
}

function deleteMessage(int $id): void
{
    $db = getDBConnection();

    $query = $db->prepare('DELETE FROM message WHERE id = :id');

    $query->execute([
        'id' =>  $id,
    ]);
}
