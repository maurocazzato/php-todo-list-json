<?php

    header("Content-Type: application/json");
    header("Access-Control-Allow-Headers: X-Requested-With");
    header("Access-Control-Allow-Origin: http://localhost:5174");

    $jsonTasks = file_get_contents(__DIR__ . "/tasks.json");
    $tasks = json_decode($jsonTasks, true);

    $taskIndex = $_POST['index'];

    $task = $tasks[$taskIndex];
    $task['completed'] = !$task['completed'];

    $tasks[$taskIndex] = $task;

    $jsonTasks = json_encode($tasks);
    file_put_contents(__DIR__ . "/tasks.json", $jsonTasks);
    echo $jsonTasks;