<?php

if (file_exists(__DIR__ . '../vendor/autoload.php')) {
    require_once __DIR__ . '../vendor/autoload.php';
}

if (class_exists('ContentController')) {
    Object::add_extension('ContentController', 'HashPathExtension');
}
