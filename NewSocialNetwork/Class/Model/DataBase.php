<?php


namespace Model;

use PDO;

require_once ("../DataBase/config.php");


class DataBase
{
    /*
     * @var PDO;
     */
    public static $database;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance(  ) {

        if(!self::$database){
            self::$database = new PDO(DATABASE_TYPE.":host=".DATABASE_HOST.";dbname=".DATABASE_NAME, DATABASE_USER, DATABASE_PASS);
        }

        return self::$database;

    }

    public static function getStatement($query){

            $statement = self::getInstance()-> prepare($query);
            return $statement;
    }
};