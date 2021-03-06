<?php

/**
 * rename this file to 'config.php'
 */

$config = new stdClass();

$config->server = new stdClass();
$config->server->host = '';
$config->server->port = '';
$config->server->dbname = '';
$config->server->user = '';
$config->server->password = '';

$config->checkDelegationsIntervalHard = '1 day';
$config->checkDelegationsIntervalSoft = '3 seconds';

// !!! don't change the access level if you don't know what you are doing. !!!
$config->defaultAccessLevel = \LiquidFeedback\AccessLevel::ANONYMOUS;
