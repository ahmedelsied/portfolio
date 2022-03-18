<?php

namespace Database\Seeders;

use App\Domain\Core\Models\Page;
use Illuminate\Database\Seeder;

class StaticPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->loadStaticPages();
    }

    public function loadStaticPages(): void
    {
        $baseBody = [
            'ar' => 'محتوي الصفحة فارغ حاليا',
            'en' => 'page content is empty',
        ];
        $data = [
            [
                'key'   => Page::ABOUT,
                'title' => [
                    'ar' => 'من نحن',
                    'en' => 'About us',
                ],
                'body'  => $baseBody,
            ],
        ];
        collect($data)->each(fn ($i) => Page::updateOrCreate(['key' => $i['key']], $i));
        echo 'Pages Created Successfully'.PHP_EOL;
    }
}
