<?php 

    // include to move database to other php file
    include "./database/database.php";

    // transform to json type file
    header("Content-Type: application/json");

    // encode database
    echo json_encode($db);

?>