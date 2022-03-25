<?php

namespace App\Domain\Personal\Models;

use App\Support\Concerns\HasFactory;
use Cache;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['year'];

    protected $casts = [
        'year'  => 'date:M Y'
    ];

    public static function latestEducation()
    {
        return Cache::get('education') ?? self::cacheData();
    }

    public static function cacheData()
    {

        Cache::forever('education',Education::limit(8)->get());
        return Cache::get('education');
    }
}
