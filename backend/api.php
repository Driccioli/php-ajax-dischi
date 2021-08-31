<?php 


    require_once __DIR__."/../database/database.php";


    header('Content-Type: application/json');  // per dichiarare al client che il nostro contenuto è un json
    echo json_encode($discs);      // stampa l'array trasformato in json
?>