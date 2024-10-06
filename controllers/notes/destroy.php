<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;
$query = "SELECT * FROM notes WHERE id = :id";

$note = $db->query($query, ['id' => $_POST['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query("DELETE FROM notes WHERE id = :id", ['id' => $_POST['id']]);

header("location: /notes");
exit();