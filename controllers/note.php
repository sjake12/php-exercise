<?php
$config = require "./config.php";
$db = new Database($config['database']);

$header = "Notes";
$query = "SELECT * FROM notes WHERE user_id = :user_id";

$notes = $db->query($query, ['user_id' => $_GET['id']])->fetchAll();

require "./views/note.view.php";
