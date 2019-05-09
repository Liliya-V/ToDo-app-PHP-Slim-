<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-05-09
 * Time: 16:27
 */

namespace ToDo\Factories;


class TasksModel
{

    public $connection;

    /**
     * ColorsModel constructor.
     * @param $connection
     */
    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }


    public function getColors() {
        $sqlcolor = "SELECT `color` FROM `colors`;";
        $queryColor = $this->connection->query($sqlcolor);
        $colors = $queryColor->fetchAll();
        return $colors;
    }
}