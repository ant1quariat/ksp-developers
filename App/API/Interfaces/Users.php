<?php
namespace App\API\Interfaces;

interface User {
    public static function addUser(string $user_name, string $user_lastname, int $user_age);
    public static function editUser(int $user_id, string $name, string $lastname, int $age);
    public static function delUser(int $user_id);

    public static function getUser($user_id);
    public static function getUsers();

}