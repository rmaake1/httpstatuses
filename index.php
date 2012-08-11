<?php

    require 'klein.php';
    require 'httpstatuses.php';
    require 'helper.php';
    
    respond('/', function($request, $response) {
        $class_list = Httpstatuses::statuses();
        $response->render('views/index.php', array("class_list" => $class_list));
    });
    
    respond('/generator', function($request, $response) {
        // generator here
    });
    
    respond('/[i:id]', function($request, $response) {
        $status_code = $request->param('id');
        $code = Httpstatuses::status($status_code);
        
        if(!$code)
        {
            $response->code(404);
            $response->render('views/404.php');
        }
        
        $response->render('views/status_code.php', $code);
    });
    
    respond('404', function ($request, $response) {
        $response->render('views/404.php');
    });
   
    dispatch();