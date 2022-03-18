<?php

namespace App\Domain\Personal\Models;

use App\Support\Concerns\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class WorkProcess extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $guarded = [];
}
