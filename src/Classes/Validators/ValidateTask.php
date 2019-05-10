<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-05-10
 * Time: 10:53
 */

namespace ToDo\Validators;


class ValidateTask
{
    public $postData;

    static public function validateTask($postData)
    {
        return (!empty($postData['task']));
    }
}