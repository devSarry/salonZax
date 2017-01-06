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

        $staff = \App\Staff::create([
            'name' => 'Pizza Luis',
            'title' => 'Head Hunter',
            'body' => 'Employee of the month',
            'email' => 'pizza@lu.com'
        ]);

        $staff->image()->create([
            'image' => 'staff.png',
            'upload_dir' => 'assets/images/',
            'original_image_name' => 'staff.png',
            'size' => 500,
            'extension' => 'png',
            'mime_type' => 'png'
        ]);
    }

    private function populateServiceSection(){
        if (! (\App\StaffSection::first())){

            $section = \App\StaffSection::create();
            $section->section()->create([
                'title' => 'Change Me',
                'body'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi aut delectus dolorum eius enim explicabo hic illum non quam quasi ratione saepe sapiente similique tenetur veniam vitae, voluptas! Omnis?',
                'color'     => 'style1'
            ]);
        }
    }
}
