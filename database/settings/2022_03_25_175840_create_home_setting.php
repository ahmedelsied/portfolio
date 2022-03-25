<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class createhomeSetting extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('home.header_text', 'Hi! I’m Ahmed Elsayed Backend Developer');
        $this->migrator->add('home.about_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');
    }
}
