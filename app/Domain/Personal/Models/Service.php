<?php

namespace App\Domain\Personal\Models;

use App\Support\Concerns\HasFactory;
use App\Support\Traits\Optimizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Service extends Model
{
    use HasFactory,Optimizable;

    protected $guarded = [];

    public static function latestServices()
    {
        return Cache::get('services') ?? self::cacheData();
    }

    public static function cacheData()
    {
        Cache::forever('services',Service::get());
        return Cache::get('services');
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->optimizable($media);
    }
}
