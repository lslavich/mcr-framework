<?php

use Symfony\Component\HttpFoundation\Request;

$loader = require __DIR__.'/../autoload.php';
require_once __DIR__.'/kernel.php';

$app = new AppKernel('prod', false);
$app->loadClassCache();

$app->handle(Request::createFromGlobals())->send();
