<?php

namespace App\Config;

class DB
{
    public static $db = [];

    public static function activate()
    {
        self::$db[] = [
            "id" => "1251d3f9e07edc04dc948102bfc29fd2",
            "username" => "Vova",
            "user_lastname" => "Andreew",
            "user_age" => "15"
        ];
        self::$db[] = [
            "id" => "15abf9a3027e39a57c58539548bd2eb6",
            "username" => "Miha",
            "user_lastname" => "Popow",
            "user_age" => "20"
        ];
        self::$db[] = [
            "id" => "34dd622c01174fc393037c47333e897e",
            "username" => "Andrey",
            "user_lastname" => "Maximow",
            "user_age" => "17"
        ];
        self::$db[] = [
            "id" => "140daa03e088d89d64d3a21e5bcac012",
            "username" => "Maria",
            "user_lastname" => "Zabrowskaya",
            "user_age" => "14"
        ];
        self::$db[] = [
            "id" => "b58bbb317fcd5f2e140a5d3aa2d37008",
            "username" => "Alina",
            "user_lastname" => "Sewostyanowa",
            "user_age" => "11"
        ];
        self::$db[] = [
            "id" => "6fafbf586fb5b9d2f4035e19c439d3a3",
            "username" => "Nastya",
            "user_lastname" => "Mihalkowa",
            "user_age" => "25"
        ];
    }

}