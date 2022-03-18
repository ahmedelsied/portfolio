<?php

namespace App\Domain\Personal\Models;

use App\Support\Concerns\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['year'];

    protected $casts = [
        'year'  => 'date:M Y'
    ];
}
