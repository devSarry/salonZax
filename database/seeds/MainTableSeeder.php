<?php

use Illuminate\Database\Seeder;

class MainTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->populateServiceSection();
    }

    private function populateServiceSection()
    {
        if ( ! (\App\MainSection::first()))
        {

            $section = \App\MainSection::create();
            $section->section()->create([
                'title' => 'SALON DEMO',
                'body'  => '123 BRODWAY ST
SITE TEMPLATE FREEBIE 
CRAFTED BY HTML5 UP.',

            ]);

            $section->image()->create([
                'image' => 'banner.jpg',
                'upload_dir' => 'seededBanner/',
                'original_image_name' => 'banner.jpg',
                'size' => 500,
                'extension' => 'jpg',
                'mime_type' => 'jpg'
            ]);
        }
    }
}
