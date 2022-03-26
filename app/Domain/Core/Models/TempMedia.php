<?php

namespace App\Domain\Core\Models;

use App\Support\Concerns\HasFactory;
use App\Support\Traits\Optimizable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class TempMedia extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia,Optimizable;

    protected $table = 'temp_media';
    use HasFactory;

    protected $guarded = [];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->optimizable($media);
    }
}
