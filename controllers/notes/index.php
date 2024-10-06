<?php

require base_path('bootstrap.php');

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$query = "SELECT * FROM notes WHERE user_id = 1";

$notes = $db->query($query)->get();

view("/notes/index.view.php", [
    'header' => "Notes",
    'notes' => $notes
]);
