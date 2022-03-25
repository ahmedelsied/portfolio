<?php

namespace App\Domain\Core\Settings;

use Spatie\LaravelSettings\Settings;

class SectionsSettings extends Settings
{
    public bool $services;
    public bool $team_members;
    public bool $testimonials;
    public bool $clients;
    public bool $blog;
    public static function group(): string
    {
        return 'sections';
    }
}
