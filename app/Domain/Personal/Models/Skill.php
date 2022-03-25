<?php

namespace App\Domain\Personal\Models;

use App\Support\Concerns\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Skill extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function latestSkills()
    {
        return Cache::get('skills') ?? self::cacheData();
    }

    public static function cacheData()
    {
        Cache::forever('skills',Skill::get());
        return Cache::get('skills');
    }
}
