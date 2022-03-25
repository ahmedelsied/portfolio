<?php

namespace App\Domain\Core\Settings;

use Spatie\LaravelSettings\Settings;

class ContactInfoSettings extends Settings
{
    public string $email;
    public string $phone;
    public string $address;

    public static function group(): string
    {
        return 'contact_info';
    }
}
