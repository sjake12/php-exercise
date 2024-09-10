<?php
$config = require "./config.php";
$db = new Database($config['database']);

$header = "Notes";
$query = "SELECT * FROM notes WHERE user_id = 1";

$notes = $db->query($query)->fetchAll();

require "./views/notes.view.php";
