<?php

require_once 'vendor/autoload.php';
require_once 'config.php';

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

$lqfb = new \LiquidFeedback\LiquidFeedback($config->server->host,
    $config->server->port, $config->server->dbname, $config->server->user,
    $config->server->password);

$app->get('/', function() use($app) {
    $app->response->headers->set('Content-Type', 'text/html');

    $app->response->setBody('index');
});

$app->get('/info', function() use ($app, $lqfb) {
    $result = $lqfb->getLiquidFeedbackVersion();
    $app->response->setBody(json_encode($result, JSON_PRETTY_PRINT));
});

$app->get('/member_count', function() use ($app, $lqfb) {
    $result = $lqfb->getMemberCount();
    $app->response->setBody(json_encode($result, JSON_PRETTY_PRINT));
});

$app->get('/member', function() use ($app, $lqfb) {
    // todo: parameters
    // todo: access level

    $result = $lqfb->getMember();
    $app->response->setBody(json_encode($result, JSON_PRETTY_PRINT));
});

// ...

$app->run();