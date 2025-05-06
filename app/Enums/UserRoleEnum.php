<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum UserRoleEnum: string implements HasLabel
{
    case Admin = 'admin';
    case Employees = 'employees';
    case Employer = 'employer';

    public function getLabel(): string
    {
        return match ($this) {
            self::Admin => 'Admin',
            self::Employees => 'Employees',
            self::Employer => 'Employer',
        };
    }

    public static function random(): self
    {
        $values = self::cases();
        return $values[array_rand($values)];
    }
}
