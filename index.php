<?php
require 'vendor/autoload.php';
use \Slim\App;

$app = new App();

$app->post('/', function ($request, $response) {
  error_log($request->getBody()->getContents());
  return $response->withJson(array(
    'replies' => [
      array('type' => 'text', 'content' => 'Roger that')
    ],
    'conversation' => array(
      'memory' => array('key' => 'value')
    )
  ));
});

$app->post('/errors', function ($request, $response) {
  error_log($request->getBody()->getContents());
  return $response;
});

$app->run();
