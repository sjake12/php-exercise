<?php
$config = require "./config.php";
$db = new Database($config['database']);

$header = "Notes";
$query = "SELECT * FROM users";

$users = $db->query($query)->fetchAll();

require "./views/notes.view.php";
