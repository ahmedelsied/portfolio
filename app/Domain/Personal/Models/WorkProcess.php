<?php

namespace App\Domain\Personal\Models;

use App\Support\Concerns\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class WorkProcess extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $guarded = [];

    public static function latestWorkProcesses()
    {
        return Cache::get('work_processes') ?? self::cacheData();
    }

    public static function cacheData()
    {
        Cache::forever('work_processes',WorkProcess::with('media')->get());
        return Cache::get('work_processes');
    }
}
