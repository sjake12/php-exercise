<?php
$config = require "./config.php";
$db = new Database($config['database']);

$header = "New note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $query = "INSERT INTO notes(body, user_id) VALUES(:body, :user_id)";
}

require "./views/note-create.view.php";
