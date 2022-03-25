<?php

namespace App\Domain\Portfolio\Models;

use App\Support\Concerns\HasFactory;
use App\Support\Traits\Optimizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Work extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia,Optimizable;
    protected $table = 'work';
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(WorkCategory::class, 'category_id');
    }
    public static function latestWork()
    {
        return Cache::get('work') ?? self::cacheData();
    }

    public static function cacheData()
    {
        Cache::forever('work',Work::with('media')->limit(5)->get());
        return Cache::get('work');
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->optimizable($media);
    }
}
