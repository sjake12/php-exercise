<?php

$_SESSION['name'] = 'Jake';

view("index.view.php", [
    'header' => "Home",
]);
