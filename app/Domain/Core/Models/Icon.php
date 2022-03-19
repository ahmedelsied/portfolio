<?php

namespace App\Domain\Core\Models;

use App\Support\Concerns\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function chunkIcons()
    {
        $finalIcons = collect();
        Icon::orderBy('id')->chunk(50, function($icons) use ($finalIcons)
        {
            foreach ($icons as $icon){
                $finalIcons->push($icon);
            }
        });

        return $finalIcons;
    }
}
