<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {

    $app->get('/', 'TasksShowController');
    $app->post('/addTask', 'TaskAddController');
    $app->post('/completedTask', 'TaskCompletedController');


};
