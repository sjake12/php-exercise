<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$query = "INSERT INTO users(id, email, name) VALUES(null, :email, :name)";

if (! Validator::email($_POST['email']))
{
  $errors['email'] = "Please enter a valid email address";
}

if (! empty($errors))
{
  return view('registration/create.view.php',[
    'errors' => $errors['email'],
  ]);
}

$db->query($query,[
  'email' => $_POST['email'],
  'name' => $_POST['name'],
]);

header('Location: /' );