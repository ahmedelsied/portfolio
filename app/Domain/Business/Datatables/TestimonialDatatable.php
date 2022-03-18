<?php

namespace App\Domain\Business\Datatables;

use App\Domain\Business\Models\Testimonial;
use App\Support\Datatables\BaseDatatable;
use Illuminate\Database\Eloquent\Builder;

class TestimonialDatatable extends BaseDatatable
{
    public function query(): Builder
    {
        return Testimonial::query();
    }


    protected function getColumns(): array
    {
        return [
            $this->column('id',__('ID')),
            $this->column('client_name',__('Client Name')),
            $this->column('image',__('Client Image')),
            $this->column('client_position',__('Client Position')),
            $this->column('review',__('Review')),
        ];
    }


    protected function getCustomColumns(): array
    {
        return [
            'image' => function ($model) {
                return '<img width="200" src="'.$model->getFirstMediaUrl('client_image').'" alt="'.$model->client_name.'"/>';
            }
        ];
    }
}
