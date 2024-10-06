<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;
$query = "SELECT * FROM notes WHERE id = :id";

$note = $db->query($query, ['id' => $_POST['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$errors = [];

if (! Validator::string($_POST['body'], 1, 1000)) {
  $errors['body'] = "A body of no more than 1000 characters is required";
}

if (count($errors)){
  return view("notes/edit.view.php", [
    'header' => "Edit note",
    'errors' => $errors,
    'note' => $note
  ]);
}

$db->query("UPDATE notes SET body = :body WHERE id = :id", [
  'body' => $_POST['body'],
  'id' => $_POST['id']
]);

header("Location: /notes");
exit();