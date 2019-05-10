<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-05-09
 * Time: 16:28
 */

namespace ToDo\Factories;



use ToDo\Models\TasksModel;

class TasksModelFactory
{
    public function __invoke($dic)
    {
        $db = $dic->get('DB');
        return new TasksModel($db);
    }

}