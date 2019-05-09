<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-05-09
 * Time: 16:31
 */

namespace ToDo\Factories;


class DbConnector
{
    const HOST = '192.168.20.20';
    const DBNAME = 'Todo';
    const USER = 'root';
    const PASSWORD = '';

    public function __invoke()
    {
        $connection = new \PDO("mysql:host=" . self::HOST . ";dbname=" . self::DBNAME, self::USER, self::PASSWORD);
        $connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return $connection;
    }
}