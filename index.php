<?php

require('model/model.php');

//Vérifie que le formulaire est soumis 
if (isset($_POST['submit'])) {
    //On ajout le message
    addMessage($_POST['pseudo_fe'], $_POST['message_fe']);
}

//Les données de la table message
$data = findAll();

//La view
require('view/default.php');