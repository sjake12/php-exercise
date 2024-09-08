<?php

$config = require "./config.php";
$db = new Database($config['database']);

$header = "Notes";
$usersQuery = "SELECT * FROM users";


function users($db, $query)
{
    return $db->query($query)->fetchAll();
}


$users = users($db, $usersQuery);

require "./views/notes.view.php";
