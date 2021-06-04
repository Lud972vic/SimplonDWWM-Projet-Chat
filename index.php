<?php

require('model/model.php');

//Vérifie que le formulaire est soumis 
if (isset($_POST['submit'])) {
    //On ajout le message
    addMessage($_POST['pseudo_fe'], $_POST['message_fe']);
}

//Vérifie que l'id existe
if (isset($_GET['delete'])) {
    //On supprime un message
    deleteMessage($_GET['delete']);
}

//Moteur de recherche
if (!isset($_GET['search'])) {
    //Les données de la table message
    $messages = findAll();
} else {
    //Les données de la table message filtré
    $messages = findAllMessages($_GET['search']);
}

//La view
require('view/default.php');
