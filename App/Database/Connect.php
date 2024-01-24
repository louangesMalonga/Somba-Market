<?php

namespace Database;

use PDO;

class Connect
{
    protected $connect;
    function __construct($host, $user, $password, $database)
    {
        try {
            $this->connect = new PDO("mysql:host=".$host.";dbname=".$database, $user, $password);
        }catch (
            \PDOException $e
        ){
            die($e->getMessage()."in".$e->getFile()." line ".$e->getLine());
        }
    }



}
