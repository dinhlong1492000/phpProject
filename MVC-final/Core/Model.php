<?php

namespace Core;
use App\Config;

use PDO;

abstract class Model {

    protected static function getDB()
    {
        static $db = null;
        if ($db === null) {
            // $host = 'localhost';
            // $dbname = 'mvc';
            // $username = 'root';
            // $password = 'root';
                // $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$username,$password);
                $dsn = 'mysql:host='.Config::DB_HOST.';dbname='.Config::DB_NAME.';charset=utf8';
                $db = new PDO($dsn, Config::DB_USER, Config::DB_PASSWORD);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $db;
    }

}