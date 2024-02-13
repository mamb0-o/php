<?php

require 'vendor/autoload.php';

use Laminas\Crypt\Password\Bcrypt;

$bcrypt = new Bcrypt();

$valid = $bcrypt->verify($argv[1], $argv[2]);

if ($valid){
    echo "Valid" . PHP_EOL;
} 
else{
    echo "Invalid" . PHP_EOL;
}