<?php

require base_path('bootstrap.php');

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;
$query = "SELECT * FROM notes WHERE id = :id";

$note = $db->query($query, ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view("notes/show.view.php", [
    'header' => "Notes",
    'note' => $note
]);
