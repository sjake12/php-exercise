<?php
$config = require "./config.php";
$db = new Database($config['database']);

$header = "Notes";
$query = "SELECT * FROM notes WHERE id = :id";

$note = $db->query($query, ['id' => $_GET['id']])->fetch();

if (! $note) {
    abort();
}

$currentUserId = 1;

if ($note['user_id'] !== $currentUserId) abort(Response::FORBIDDEN);

require "./views/note.view.php";
