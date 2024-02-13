<?php

require 'vendor/autoload.php';

use Laminas\Crypt\Password\Bcrypt;

$bcrypt = new Bcrypt();;

$hash = $bcrypt->create($argv[1]);

echo $hash . PHP_EOL;