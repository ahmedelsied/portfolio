<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateSEOSetting extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('seo.site_description', 'This is my protfolio');
        $this->migrator->add('seo.site_keywords', 'ahmed protfolio,this is my portfolio');
    }
}
