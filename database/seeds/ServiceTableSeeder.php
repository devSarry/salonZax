<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = \App\ServiceCategory::create(['name' => 'Haircuts', 'approved' => 1]);
        $services = ['Haircuts & Blowouts', 'Express Cut', 'Clipper Cut', 'Kids Cut'];
        $eloService = $this->populateServices($services);
        $category->services()->saveMany($eloService);

        $category = \App\ServiceCategory::create(['name' => 'Finishing Touches', 'approved' => 1]);
        $services = ['Basic Blowout', 'Ironworks', 'Styling', 'Shampoo & Set'];
        $eloService = $this->populateServices($services);
        $category->services()->saveMany($eloService);

        $category = \App\ServiceCategory::create(['name' => 'Hair Treatments', 'approved' => 1]);
        $services = ['Moisture Loss', 'Color Treated', 'Dry Scalp', 'Clarifying'];
        $eloService = $this->populateServices($services);
        $category->services()->saveMany($eloService);

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
        foreach ($services as $service)
        {
            $s = new \App\Service([
                'service'  => $service,
                'price'    => $faker->randomNumber(2)
            ]);

            array_push($eloService, $s);
        }

        return $eloService;
    }
}
