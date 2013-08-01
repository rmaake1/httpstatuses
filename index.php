<?php

require 'vendor/autoload.php';
require 'lib/Httpstatuses/Httpstatuses.php';

$klein = new \Klein\Klein();
$httpstatuses = new \Httpstatuses\httpstatuses();

$klein->respond('GET', '/', function ($request, $response, $service) use ($httpstatuses) {
    $class_list = $httpstatuses->statuses();
    $service->render('views/index.php', array("class_list" => $class_list));
});

$klein->respond('GET', '/[i:id]', function ($request, $response, $service) use ($httpstatuses) {
    $status_code = $request->param('id');
    $code = $httpstatuses->status($status_code);

    if (!$code)
        $service->render('views/404.php');

    $service->render('views/status_code.php', $code);
});

$klein->respond('GET', '404', function ($request, $response, $service) {
    $service->render('views/404.php');
});

$klein->dispatch();