<?php

    require 'vendor/autoload.php';
    require 'httpstatuses.php';
    
    respond('/', function($request, $response) {
        $class_list = Httpstatuses::statuses();
        $response->render('views/index.php', array("class_list" => $class_list));
    });

    respond('/[i:id]', function($request, $response) {
        $status_code = $request->param('id');
        $code = Httpstatuses::status($status_code);
        
        if(!$code)
            $response->render('views/404.php');
        
        $response->render('views/status_code.php', $code);
    });
    
    respond('404', function ($request, $response) {
        $response->render('views/404.php');
    });
   
    dispatch();