<?php
require 'Validator.php';

$config = require "./config.php";
$db = new Database($config['database']);

$header = "New note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $validator = new Validator();
    $query = "INSERT INTO notes(body, user_id) VALUES(:body, :user_id)";
    $errors = [];

    if (! $validator->string($_POST['body'], 1, 1000)) {
        $errors['body'] = "A body of no more than 1000 characters is required";
    }

    if (empty($errors)) {
        $db->query($query, [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

require "./views/note-create.view.php";
