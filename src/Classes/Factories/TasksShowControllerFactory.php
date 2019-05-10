<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-05-09
 * Time: 16:28
 */

namespace ToDo\Factories;


use ToDo\Controllers\TasksShowController;

class TasksShowControllerFactory
{
    public function __invoke($dic)
    {
        $phpRenderer = $dic->get('renderer');
        $tasksModel = $dic->get('TasksModel');
        return new TasksShowController($phpRenderer, $tasksModel);
    }

}