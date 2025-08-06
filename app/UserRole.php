<?php

namespace App;

enum UserRole: string
{
    case ADMIN = 'admin';
    case USER = 'user';
    public static function values(): array
    {
        return [
            self::ADMIN->value,
            self::USER->value,
        ];
    }
}
