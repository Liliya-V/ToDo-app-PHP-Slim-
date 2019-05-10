<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-05-09
 * Time: 17:18
 */

namespace ToDo\Factories;

use ToDo\Controllers\TaskCompletedController;

class TaskCompletedControllerFactory
{
    public function __invoke($dic)
    {
        $tasksModel = $dic->get('TasksModel');
        return new TaskCompletedController($tasksModel);
    }

}