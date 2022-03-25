<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class createSocialSetting extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('social.facebook', 'https://www.facebook.com/dev.ahmed.elsied/');
        $this->migrator->add('social.linkedin', 'https://www.linkedin.com/in/dev-ahmed-elsied/');
        $this->migrator->add('social.github', 'https://github.com/ahmedelsied');
        $this->migrator->add('social.behance', '');
    }
}
