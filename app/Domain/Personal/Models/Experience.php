<?php

namespace App\Domain\Personal\Models;

use App\Support\Concerns\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['from','to'];

    protected $casts = [
        'from'  => 'date:M Y',
        'to'    => 'date:M Y'
    ];
}
