<?php


namespace App\Enums;

class RoleEnum extends Enum
{
    public const ADMINISTRATOR = 'Admin';
    public const USER = 'User';

    public static function default()
    {
        return self::USER;
    }
}
