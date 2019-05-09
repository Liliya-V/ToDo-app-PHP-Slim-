<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-05-09
 * Time: 16:26
 */

namespace ToDo\Controllers;

use ToDo\Models\TasksModel;
use Slim\Views\PhpRenderer;
use Slim\Http\Response;
use Slim\Http\Request;

class TaskAddController
{
    private $phpRenderer;
    private $colorsModel;

    /**
     * ColoraController constructor.
     * @param $phpRenderer
     */
    public function __construct(PhpRenderer $phpRenderer, ColorsModel $colorsModel)
    {
        $this->phpRenderer = $phpRenderer;
        $this->colorsModel = $colorsModel;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $colors = $this->colorsModel->getColors();
        return $this->phpRenderer->render($response, 'colors.phtml', ['colors' => $colors]);
    }

}