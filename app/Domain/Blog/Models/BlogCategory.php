<?php

namespace App\Domain\Blog\Models;

use App\Support\Concerns\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $guarded = [];
}
