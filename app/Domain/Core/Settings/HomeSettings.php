<?php

namespace App\Domain\Core\Settings;

use Spatie\LaravelSettings\Settings;

class HomeSettings extends Settings
{
    public string $header_text;
    public string $about_text;

    public static function group(): string
    {
        return 'home';
    }
}
