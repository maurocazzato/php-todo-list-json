<?php
    
    header("Content-Type: application/json");
    header("Access-Control-Allow-Headers: X-Requested-With");
    header("Access-Control-Allow-Origin: http://localhost:5174");

    $jsonTasks = file_get_contents(__DIR__ . "/tasks.json");
    echo $jsonTasks;

  