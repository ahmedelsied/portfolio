<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSetting extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_title', 'Ahmed Elsayed');
        $this->migrator->add('general.site_logo', 'Empty Logo');
    }
}
