<?php

final class DBConnection
{
    private const HOST = "localhost";
    private const DB = "test";
    private const USER = "root";
    private const PASSWORD = "";
    private static $PDO = null;
    private static $DSN = "mysql:host=" . self::HOST . ";dbname=" . self::DB . ";";

    public static function connect($dbName = "")
    {
        if (!empty($dbName))
            self::$DSN = "mysql:host=" . self::HOST . ";dbname=" . $dbName . ";";

        try {
            if (!self::isConnected()) {
                self::$PDO = new PDO(self::$DSN, self::USER, self::PASSWORD);
                self::$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return self::getPDO();
            }
        } catch (PDOException $error) {
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
