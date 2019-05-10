<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-05-09
 * Time: 16:27
 */

namespace ToDo\Models;



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


    public function getUncompletedTasks()
    {
        $sqlTasks = "SELECT `id`, `task` FROM `todos` WHERE `completed`= 0;";
        $queryTasks = $this->connection->query($sqlTasks);
        $tasks = $queryTasks->fetchAll();
        return $tasks;
    }

    public function getCompletedTasks()
    {
        $sqlCompletedTasks = "SELECT `task` FROM `todos` WHERE `completed`= 1;";
        $queryCompletedTasks = $this->connection->query($sqlCompletedTasks);
        $completedtasks = $queryCompletedTasks->fetchAll();
        return $completedtasks;
    }

   public  function addTask($task)
   {
       $sqlAddTask = "INSERT INTO `todos` (`task`) VALUES (:task);";
       $queryAddTask = $this->connection->prepare($sqlAddTask);


       return $queryAddTask->execute([':task'=> $task]);
   }

    public  function completeTask($task)
    {
        $sqlCompleteTask = "UPDATE `todos` SET `completed`='1' WHERE `id`= (:id);";
        $queryCompleteTask = $this->connection->prepare($sqlCompleteTask);


        return $queryCompleteTask->execute([':id'=> $task['id']]);
    }



}



