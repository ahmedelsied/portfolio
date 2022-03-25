<?php

namespace App\Domain\Personal\Models;

use App\Support\Concerns\HasFactory;
use App\Support\Traits\Optimizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class TeamMember extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia,Optimizable;

    protected $guarded = [];

    public static function latestTeamMembers()
    {
        return Cache::get('team_members') ?? self::cacheData();
    }

    public static function cacheData()
    {
        Cache::forever('team_members',TeamMember::with('media')->get());
        return Cache::get('team_members');
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->optimizable($media);
    }
}
