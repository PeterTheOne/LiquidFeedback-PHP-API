<?php

require_once 'vendor/autoload.php';
// todo: autoload?
require_once 'MainController.php';

$app = new \Slim\Slim(array(
    'debug' => false
));

// todo: add xml etc. switch
$app->response->headers->set('Content-Type', 'application/json');
$app->response->headers->set('Access-Control-Allow-Origin', '*');

// todo: only display errors if config says so.
$app->error(function(\Exception $exception) use ($app) {
    $app->response->headers->set('X-Status-Reason', $exception->getMessage());
    $app->response->setBody($exception->getMessage());
});

$controller = new \LqfbPhpApi\MainController();

$app->get('/', function() use($app) {
    $app->response->headers->set('Content-Type', 'text/html');

    $app->response->setBody('index');
});

$app->get('/info', function() use ($app, $controller) {
    $result = $controller->getLiquidFeedbackVersion();
    $app->response->setBody(json_encode($result, JSON_PRETTY_PRINT));
});

$app->get('/member_count', function() use ($app, $controller) {
    $result = $controller->getMemberCount();
    $app->response->setBody(json_encode($result, JSON_PRETTY_PRINT));
});

$app->get('/member', function() use ($app, $controller) {
    // todo: parameters
    // todo: access level

    $result = $controller->getMember();
    $app->response->setBody(json_encode($result, JSON_PRETTY_PRINT));
});

// ...

$app->run();