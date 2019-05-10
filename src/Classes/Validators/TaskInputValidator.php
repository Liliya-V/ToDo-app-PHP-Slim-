<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-05-10
 * Time: 10:57
 */

namespace ToDo\Validators;


class TaskInputValidator
{
    static public function checkTask($data)
    {
        $result = [];
        $result[':task'] = filter_var($data['task'], FILTER_SANITIZE_STRING);
        return $result;
    }
}