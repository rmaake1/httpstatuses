<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'httpstatuses.php';

$base = dirname($_SERVER['PHP_SELF']);
if(ltrim($base, '/')) $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));

$klein = new \Klein\Klein();
    
$klein->respond('/', function($request, $response, $service) {
    $class_list = Httpstatuses::statuses();
    $service->render('views/header.php', array('title' => 'HTTP Status Codes'));
    $service->render('views/index.php', array('class_list' => $class_list));
});

$klein->respond('/[i:id]', function($request, $response, $service) {
    $status_code = $request->id;
    $code = Httpstatuses::status($status_code);

    if(!$code) {
        $service->render('views/header.php', array('title' => '404real'));
        $service->render('views/404.php');
    } else {
        $service->render('views/header.php', array('title' => $code['code']));
        $service->render('views/status_code.php', $code);
    }
});

$klein->respond('/[i:id]xx', function($request, $response, $service) {
    $status_code = $request->id;
    $codes = Httpstatuses::group($status_code);

    if(!$codes) {
        $service->render('views/header.php', array('title' => '404real'));
        $service->render('views/404.php');
    } else {
        $service->render('views/header.php', array('title' => $status_code . 'xx'));
        $service->render('views/status_codes.php', array('group' => $status_code, 'codes' => $codes));
    }
});

$klein->respond('404', function ($request, $response, $service) {
    $service->render('views/header.php', array('title' => '404real'));
    $service->render('views/404.php');
});
   
$klein->dispatch();