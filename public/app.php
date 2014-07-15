<?php

// todo: add xml etc. switch
$app->response->headers->set('Content-Type', 'application/json');
$app->response->headers->set('Access-Control-Allow-Origin', '*');

$lqfb = new \LiquidFeedback\LiquidFeedback($config->server->host,
    $config->server->port, $config->server->dbname, $config->server->user,
    $config->server->password);
// !!! don't change the access level if you don't know what you are doing. !!!
$lqfb->setCurrentAccessLevel(\LiquidFeedback\LiquidFeedback::ACCESS_LEVEL_ANONYMOUS);

// todo: only display errors if config says so.
$app->error(function(\Exception $exception) use ($app) {
    $app->response->headers->set('X-Status-Reason', $exception->getMessage());
    $app->response->setBody('Exception: ' . $exception->getMessage());
});

$app->notFound(function () {
    echo 'Error: 404 - Route not Found';
});

$app->get('/', function() use($app) {
    $app->response->headers->set('Content-Type', 'text/html');
    $app->response->setBody('index');
});

$app->get('/info', function() use ($app, $lqfb) {
    $result = $lqfb->getInfo();
    $app->response->setBody(json_encode($result, JSON_PRETTY_PRINT));
});

$app->get('/member_count', function() use ($app, $lqfb) {
    $result = $lqfb->getMemberCount();
    $app->response->setBody(json_encode($result, JSON_PRETTY_PRINT));
});

$app->get('/contingent', function() use ($app, $lqfb) {
    $result = $lqfb->getContingent();
    $app->response->setBody(json_encode($result, JSON_PRETTY_PRINT));
});

$app->get('/contingent_left', function() use ($app, $lqfb) {
    $result = $lqfb->getContingentLeft();
    $app->response->setBody(json_encode($result, JSON_PRETTY_PRINT));
});

$app->get('/member', function() use ($app, $lqfb) {
    $result = $lqfb->getMember(
        $app->request->params('id'),
        $app->request->params('active'),
        $app->request->params('search'),
        $app->request->params('orderByName'),
        $app->request->params('orderByCreated')
    );
    $app->response->setBody(json_encode($result, JSON_PRETTY_PRINT));
});