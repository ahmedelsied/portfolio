<?php

namespace App\Domain\Core\Models;

use App\Support\Concerns\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    protected $guarded = [];
}
