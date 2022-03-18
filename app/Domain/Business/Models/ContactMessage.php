<?php

namespace App\Domain\Business\Models;

use App\Support\Concerns\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    protected $guarded = [];
}
