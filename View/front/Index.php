<?php

// on sépare les parametres 

$params = explode('/', $_GET['p']);
var_dump($params);

// on vérifie si un param existe

if($params[0] != ""){
    $controller = ucfirst($params[0]);
    echo $controller;
} else {
     
}