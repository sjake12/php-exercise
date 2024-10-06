<?php

use Core\App;
use Core\Container;
use Core\Database;

$container = new Container();

$container->bind('Core\Database', function(){
  $config = require 'config.php';

  return new Database($config['database']);
});

App::setContainer($container);