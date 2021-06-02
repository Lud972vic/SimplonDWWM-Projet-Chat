<?php

require('model/model.php');

//Les données de la table message
$data = findAll();

require('view/default.php');
