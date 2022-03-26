<?php

namespace App\Domain\Core\Settings;

use Spatie\LaravelSettings\Settings;

class SEOSettings extends Settings
{
    public string $site_description;
    public string $site_keywords;
    public static function group(): string
    {
        return 'seo';
    }
}
