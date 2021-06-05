<?php

require('model/model.php');

//Vérifie que le formulaire est soumis, et que les valeurs ne sont pas vides pour l'insertion en BdD
if (isset($_POST['submit'])) {
    //On ajout le message
    if ($_POST['pseudo_fe'] != "" && $_POST['message_fe'] != "") {
        addMessage($_POST['pseudo_fe'], $_POST['message_fe']);
    }
}

//Vérifie que l'id existe
if (isset($_GET['delete'])) {
    //On supprime un message
    deleteMessage($_GET['delete']);
    //On sauvegarde le pseudo, afin que l'utilisateur ne la ressaisie pas de nouveau
    $_POST['pseudo_fe'] = $_GET['pseudo'];
}

//Moteur de recherche
if (!isset($_GET['search'])) {
    //Les données de la table message
    $messages = findAll();
} else {
    //Les données de la table message filtré
    $messages = findAllMessagesByKeyword($_GET['search']);
}

//La view
require('view/default.php');
