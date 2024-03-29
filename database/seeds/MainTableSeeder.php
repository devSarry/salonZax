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
                'title' => 'Za<div class="special-character">✄</div>o',
                'body'  => 'parturi kampaamo 
Nyt 2 liikettä
Brahenkatu 10 Ja Uudenmaankat 4',

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
