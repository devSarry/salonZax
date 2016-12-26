<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->populateServiceSection();
    }

    private function populateServiceSection(){
        if (! (\App\StaffSection::first())){

            $section = \App\StaffSection::create();
            $section->section()->create([
                'title' => 'Change Me',
                'body'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi aut delectus dolorum eius enim explicabo hic illum non quam quasi ratione saepe sapiente similique tenetur veniam vitae, voluptas! Omnis?',
                'color'     => 'style3'
            ]);
        }
    }
}
