<?php

namespace App\Domain\Blog\Models;

use App\Domain\User\Models\User;
use App\Support\Concerns\HasFactory;
use App\Support\Traits\Optimizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Blog extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia,Optimizable;

    protected $table = "blog";
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    public function writer()
    {
        return $this->belongsTo(User::class, 'writer_id');
    }
    public static function latestPosts()
    {
        return Cache::get('posts') ?? self::cacheData();
    }

    public static function cacheData()
    {
        Cache::forever('posts',Blog::with('media')->latest()->limit(3)->get());
        return Cache::get('posts');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->optimizable($media);
    }
}
