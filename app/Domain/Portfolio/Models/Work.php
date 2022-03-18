<?php

namespace App\Domain\Portfolio\Models;

use App\Support\Concerns\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Work extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $table = 'work';
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(WorkCategory::class, 'category_id');
    }
}
