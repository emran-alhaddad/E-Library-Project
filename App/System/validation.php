<?php

class Validation
{

    public static $userNameError = "";
    public static $passwordError = "";
    public static $rePasswordError = "";
    public static $emailError = "";

    public static function isVaild($property,$regx)
    {
        if(empty($property) |! preg_match($regx,$property)) return false;
        return true;
    }

    public static function checkMin($property,$min)
    {
        if(strlen($property)<$min) return false;
        return true;
    }

    public static function checkMax($property,$max)
    {
        if(strlen($property)>$max) return false;
        return true;
    }

    public static function isValidEmail($email)
    {
        $condition = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
        return self::isVaild($email,$condition);
    }

    public static function validateUserName($username)
    {
        if (empty($username['data'])) return "required Field";
        if (!preg_match("/^[a-zA-Z-' ]*$/", $username['data'])) return "Only letters and white space allowed";
        return "";
    }

    public static function validateEmail($email)
    {
        if (empty($email['data'])) return "required Field";
        if (!preg_match(
            "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",
            $email['data']
        )) return "Invalid Email";
        return "";
    }

    public static function validatePassword($password)
    {
        if (empty($password['data'])) return "required Field";
        if (!((strlen($password['data']) >= $password['min']) && 
        (strlen($password['data']) <= $password['max']))) return "Invalid Password Length";
        return "";
    }

    public static function validateRePassword($password, $rePassword)
    {
        if ($password['data'] !== $rePassword['data']) return "Passwords not match!";
        return "";
    }

    public static function validateUser($user)
    {

        if($user['name']['required'])
        self::$userNameError = self::validateUserName($user['name']);
        
        if($user['password']['required'])
        self::$passwordError = self::validatePassword($user['password']);
        
        if($user['repass']['required'])
        self::$rePasswordError = self::validateRePassword($user['password'],$user['repass']);
        
        if($user['email']['required'])
        self::$emailError = self::validateEmail($user['email']);

        if (
            empty(self::$userNameError) && empty(self::$passwordError) &&
            empty(self::$rePasswordError) && empty(self::$emailError)
        )
            return true;
        else return false;
    }
}
