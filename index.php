<?php
require 'vendor/autoload.php';
$app = new Slim\App;
$app->get('/',function($request,$response){
   echo 'hello';
});
$app->run();