<?php

namespace App\Domain\Business\Models;

use App\Support\Concerns\HasFactory;
use App\Support\Traits\Optimizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Client extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia,Optimizable;

    protected $guarded = [];

    public static function latestClients()
    {
        return Cache::get('clients') ?? self::cacheData();
    }

    public static function cacheData()
    {
        Cache::forever('clients',Client::with('media')->inRandomOrder()->limit(10)->get());
        return Cache::get('clients');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->optimizable($media);
    }
}
