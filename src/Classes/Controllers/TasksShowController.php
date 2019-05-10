<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-05-09
 * Time: 16:26
 */

namespace ToDo\Controllers;

use Slim\Views\PhpRenderer;
use Slim\Http\Response;
use Slim\Http\Request;
use ToDo\Models\TasksModel;

class TasksShowController
{
    private $phpRenderer;
    private $tasksModel;

    public function __construct(PhpRenderer $phpRenderer, TasksModel $tasksModel)
    {
        $this->phpRenderer = $phpRenderer;
        $this->tasksModel = $tasksModel;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $tasks = $this->tasksModel->getUncompletedTasks();
        $completedtasks = $this->tasksModel->getCompletedTasks();
        return $this->phpRenderer->render($response, 'index.phtml', ['tasks' => $tasks, 'completedtasks' => $completedtasks]);
    }

}


