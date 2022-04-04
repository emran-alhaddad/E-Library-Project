<?php
namespace coding\app\system\DB;

final class DBConnection
{
    private const HOST = "localhost";
    private const USER = "root";
    private const PASSWORD = "";
    private static $PDO = null;
    private static $DSN = "";

    public static function connect($dbName)
    {
        try {
            if (!self::isConnected()) {
                self::$DSN = "mysql:host=" . self::HOST . ";dbname=" . $dbName . ";";
                self::$PDO = new \PDO(self::$DSN, self::USER, self::PASSWORD);
                self::$PDO->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                return self::getPDO();
            }
        } catch (\PDOException $error) {
            echo $error->getMessage();
        }
    }

    public static function getPDO()
    {
        return self::$PDO;
    }

    private static function isConnected()
    {
        return self::$PDO != null;
    }
}
