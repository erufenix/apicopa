<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use PHPMailer\PHPMailer\PHPMailer;

require 'src/vendor/autoload.php';

$app = new \Slim\App;

$app->get('/', function (Request $request, Response $response, array $args) {
  $response->getBody()->write("Copa2022");
  return $response;
});

$app->run();

