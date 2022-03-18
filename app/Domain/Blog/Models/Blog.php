<?php

namespace App\Domain\Blog\Models;

use App\Domain\User\Models\User;
use App\Support\Concerns\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Blog extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

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
}
