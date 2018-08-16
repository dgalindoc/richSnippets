<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/structure-data/agregate-rating', function ($request, $response, $args) {
    return $this->renderer->render($response, 'aggregate-rating.phtml', $args);
    echo ":)";die();
});

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
