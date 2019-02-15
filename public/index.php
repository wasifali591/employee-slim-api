<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

require_once('../app/api/post-employee.php');
require_once('../app/api/get-employee.php');
require_once('../app/api/put-employee.php');
require_once('../app/api/delete-employee.php');
$app->run();