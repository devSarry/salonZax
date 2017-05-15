<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = \App\ServiceCategory::create(['name' => 'Miehet', 'approved' => 1]);
        $services = ['Parran Siistiminen Langalla', 'Hiusten Kuviointi Terällä', 'Parranajo', 'Hiusten Leikkaus Alle 12v', 'Hiusten Leikkaus Opiskelijat', 'Hiusten Leikaus'];
        $eloService = $this->populateServices($services);
        $category->services()->saveMany($eloService);

        $category = \App\ServiceCategory::create(['name' => 'Naiset', 'approved' => 1]);
        $services = ['Kulmakarvojen Siistiminen Langalla', 'Kasvojen Siistiminen Langalla', 'Kulmakarvojen ja Ripsien Värjäys', 'Hiusten Leikaus'];
        $eloService = $this->populateServices($services);
        $category->services()->saveMany($eloService);

        $category = \App\ServiceCategory::create(['name' => 'Hair Treatments', 'approved' => 1]);
        $services = ['Moisture Loss', 'Color Treated', 'Dry Scalp', 'Clarifying'];
        $eloService = $this->populateServices($services);
        $category->services()->saveMany($eloService);

        $this->populateServiceSection();

    }

    /**
     * @param $services
     *
     * @return array
     */
    private function populateServices($services)
    {
        $faker = \Faker\Factory::create();
        $eloService = [];
        foreach ($services as $service) {
            $s = new \App\Service([
                'service'   => $service,
                'price'     => $faker->randomNumber(2)
            ]);

            array_push($eloService, $s);
        }

        return $eloService;
    }

    private function populateServiceSection()
    {
        if (!(\App\ServiceSection::first())) {
            $section = \App\ServiceSection::create();
            $section->section()->create([
                'title'  => 'Hinnasto',
                'body'   => 'Tarjoamme hiustenleikkuja sekä miehille että naisille.',
                'color'  => 'style3'
            ]);
        }
    }
}
