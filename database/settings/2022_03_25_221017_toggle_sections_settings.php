<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class toggleSectionsSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('sections.services', 1);
        $this->migrator->add('sections.team_members', 1);
        $this->migrator->add('sections.testimonials', 1);
        $this->migrator->add('sections.clients', 1);
        $this->migrator->add('sections.blog', 1);
    }
}
