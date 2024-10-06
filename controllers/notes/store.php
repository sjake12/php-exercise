<?php
require base_path('bootstrap.php');

use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];

$query = "INSERT INTO notes(body, user_id) VALUES(:body, :user_id)";

if (! Validator::string($_POST['body'], 1, 1000)) {
  $errors['body'] = "A body of no more than 1000 characters is required";
}

if (!empty($errors)) {
  return view("notes/create.view.php", [
    'errors' => $errors
  ]);
}

$db->query($query, [
  'body' => $_POST['body'],
  'user_id' => 1
]);

header("Location: /notes");
die();