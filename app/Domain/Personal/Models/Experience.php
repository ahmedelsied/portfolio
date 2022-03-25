<?php

namespace App\Domain\Personal\Models;

use App\Support\Concerns\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Experience extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['from','to'];

    protected $casts = [
        'from'  => 'date:M Y',
        'to'    => 'date:M Y'
    ];

    public static function latestExperiences()
    {
        return Cache::get('experiences') ?? self::cacheData();
    }

    public static function cacheData()
    {
        Cache::forever('experiences',Experience::limit(10)->get());
        return Cache::get('experiences');
    }
}
