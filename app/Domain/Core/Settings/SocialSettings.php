<?php

namespace App\Domain\Core\Settings;

use Spatie\LaravelSettings\Settings;

class SocialSettings extends Settings
{
    public string $facebook;
    public string $linkedin;
    public string $github;
    public string $behance = '';

    public static function group(): string
    {
        return 'social';
    }
}
