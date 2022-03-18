<?php

namespace Database\Seeders;

use App\Domain\Core\Models\Icon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IconsSeeder extends Seeder
{
    private $icons = [
        'Mobile Development' => 'ti-mobile',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        foreach($this->icons as $iconName => $icon){
            $data[] = ['icon_name' => $iconName,'icon' => $icon];
        }
        Icon::insert($data);
    }
}
