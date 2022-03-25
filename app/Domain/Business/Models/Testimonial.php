<?php

namespace App\Domain\Business\Models;

use App\Support\Concerns\HasFactory;
use App\Support\Traits\Optimizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Testimonial extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia,Optimizable;

    protected $guarded = [];

    public static function latestTestimonials()
    {
        return Cache::get('testimonials') ?? self::cacheData();
    }

    public static function cacheData()
    {
        Cache::forever('testimonials',Testimonial::with('media')->inRandomOrder()->limit(6)->get());
        return Cache::get('testimonials');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->optimizable($media);
    }
}
