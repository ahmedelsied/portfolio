<?php

namespace App\Domain\Core\Settings;

use Spatie\LaravelSettings\Settings;

class PersonalSettings extends Settings
{
    public string $avatar;
    public string $name;

    public static function group(): string
    {
        return 'personal';
    }
}
