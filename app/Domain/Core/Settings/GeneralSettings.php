<?php

namespace App\Domain\Core\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $site_title;
    public string $site_logo;
    public static function group(): string
    {
        return 'general';
    }
}
