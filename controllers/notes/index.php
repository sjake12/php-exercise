<?php
use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$query = "SELECT * FROM notes WHERE user_id = 1";

$notes = $db->query($query)->get();

view("/notes/index.view.php", [
    'header' => "Notes",
    'notes' => $notes
]);
