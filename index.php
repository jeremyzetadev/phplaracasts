<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

echo"Test";
echo $uri;
dd($_SERVER);

if($uri==='/index.php'){
    require 'controllers/index.php';
} else if($uri==='/about.php'){
    require 'controllers/about.php';
} else if($uri==='/contact.php'){
    require 'controllers/contact.php';
}