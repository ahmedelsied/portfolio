<?php

namespace App\Support\Traits;


/**
 * @mixin \Eloquent
 **/
trait Optimizable
{
    public function optimizable($media)
    {
        $this->addMediaConversion('optimized')
            ->format('webp');
        if(file_exists($media->getPath())) session()->put('img-path',$media->getPath());
    }
}
