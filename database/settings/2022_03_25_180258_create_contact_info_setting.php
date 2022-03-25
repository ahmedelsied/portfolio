<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class createContactInfoSetting extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('contact_info.email', 'dev.ahmed.elsied@gmail.com');
        $this->migrator->add('contact_info.phone', '+201024404534');
        $this->migrator->add('contact_info.address', 'Mansoura, Egypt');
    }
}
