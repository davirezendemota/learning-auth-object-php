<?php

spl_autoload_register(function($className){

  $ext = '.class.php';
  $dirname = 'app' . DIRECTORY_SEPARATOR . 'class';
  $path = $dirname . DIRECTORY_SEPARATOR . $className . $ext;

  if(!file_exists($path)) return false;

  include_once $path;
});