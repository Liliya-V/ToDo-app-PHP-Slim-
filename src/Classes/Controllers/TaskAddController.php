<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-05-09
 * Time: 16:26
 */

namespace ToDo\Controllers;

use ToDo\Models\TasksModel;
use Slim\Http\Response;
use Slim\Http\Request;

class TaskAddController
{
    private $tasksModel;

    /**
     * ColoraController constructor.
     * @param $phpRenderer
     */
    public function __construct(TasksModel $tasksModel)
    {
        $this->tasksModel = $tasksModel;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $data = $request->getParsedBody();
        $success = $this->tasksModel->addTask($data['task']);

        if ($success) {
        return $response->withRedirect('/');
        } else {
            echo 'Something went wrong, so may be you don\'t really need to do it?';
        }

    }

}