<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    // view renderer
    $container['renderer'] = function ($c) {
        $settings = $c->get('settings')['renderer'];
        return new \Slim\Views\PhpRenderer($settings['template_path']);
    };

    // monolog
    $container['logger'] = function ($c) {
        $settings = $c->get('settings')['logger'];
        $logger = new \Monolog\Logger($settings['name']);
        $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
    };

    $container['DB'] = new \ToDo\Factories\DbConnector();

    $container['TasksShowController'] = new \ToDo\Factories\TasksShowControllerFactory();

    $container['TaskAddController'] = new \ToDo\Factories\TaskAddControllerFactory();

    $container['TaskCompletedController'] = new \ToDo\Factories\TaskCompletedControllerFactory();

    $container['TasksModel'] = new \ToDo\Factories\TasksModelFactory();
};

