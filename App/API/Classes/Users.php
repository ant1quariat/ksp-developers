<?php

namespace App\API\Classes;

require_once "App/API/Interfaces/Users.php";
require_once "App/Config/DB.php";

use App\API\Interfaces\User;
use App\Config\DB;

class Users extends DB implements User
{
    protected static $database = [];


    /**
     * Добавление пользователя API
     * @param string $user_name
     * @param string $user_lastname
     * @param int $user_age
     * @return void
     * @throws \Exception
     */
    public static function addUser(string $user_name, string $user_lastname, int $user_age)
    {
        self::$database[] = [
            "id" => md5(random_int(92104210, 941294912412042)),
            "username" => $user_name,
            "user_lastname" => $user_lastname,
            "user_age" => $user_age
        ];
    }

    /**
     * Редактирование пользователя
     * @param int $user_id
     * @param string $name
     * @param string $lastname
     * @param int $age
     * @return void
     */
    public static function editUser(int $user_id, string $name, string $lastname, int $age)
    {
        foreach (self::$database as $item) {
            if ($item['id'] === $user_id) {
                $item['username'] = $name;
                $item['user_lastname'] = $lastname;
                $item['user_age'] = $age;
            }
        }
    }


    /**
     * Удаление пользователя
     * @param int $user_id
     * @return void
     */
    public static function delUser(int $user_id)
    {
        foreach (self::$database as $key => $item) {
            if ($item['id'] === $user_id) {
                unset(self::$database[$key]);
            }
        }
    }


    /**
     * Поиск пользователя
     * @param int $user_id
     * @return boolean
     */
    public static function getUser($user_id)
    {
        foreach (self::$db as $user) {
            if ($user['id'] === $user_id) {
                echo "<div class='user-info'><h4>Результат поиска по айди [ ".$user_id." ]</h4><span class='user-name'>Имя: ".
                    $user['username'].
                    "</span><span class='user-lastname'>Фамилия: ".$user['user_lastname'].
                    "</span><span class='user-age'>Возраст: ".$user['user_age'].
                    "</span></div>";
            }
        }
    }

    /**
     * Вывод всех пользователей
     * @return boolean
     */
    public static function getUsers()
    {
        foreach (self::$db as $users) {
            echo "<div class='user-info'><span class='user-id'>Айди: ".
                $users['id'].
                "</span><span class='user-name'>Имя: ".$users['username'].
                "</span><span class='user-lastname'>Фамилия: ".$users['user_lastname'].
                "</span><span class='user-age'>Возраст: ".$users['user_age'].
                "</span></div>";
        }
    }
}