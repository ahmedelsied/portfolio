<?php

namespace App\Domain\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasTranslations;

    public $timestamps = false;

    protected $guarded = [];

    protected $translatable = ['title', 'body'];

    public const TERMS = 'TERMS_AND_CONDITIONS';

    public const ABOUT = 'ABOUT_US';

    public const PRIVACY = 'PRIVACY_AND_POLICIES';

    protected $primaryKey = 'key';

    protected $keyType = 'string';
}
