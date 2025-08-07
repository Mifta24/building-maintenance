<?php

namespace App;

enum UserRole: string
{
    case ADMIN = 'admin';
    case USER = 'user';
    case PARTICIPANT = 'participant';
    case VISITOR = 'visitor';

    public static function values(): array
    {
        return [
            self::ADMIN->value,
            self::USER->value,
            self::PARTICIPANT->value,
            self::VISITOR->value,
        ];
    }
}
