<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class createPersonalSetting extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('personal.avatar', '');
        $this->migrator->add('personal.name', 'Ahmed Elsayed');
    }
}
