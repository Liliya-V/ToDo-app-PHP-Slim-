<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-05-09
 * Time: 17:17
 */

namespace ToDo\Factories;


use ToDo\Controllers\TaskAddController;

class TaskAddControllerFactory
{
    public function __invoke($dic)
    {
        $tasksModel = $dic->get('TasksModel');
        return new TaskAddController($tasksModel);
    }

}