<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('cars')->delete();

        $cars = array(
            ['name' => 'Audi'],
            ['name' => 'Aston Martin'],
            ['name' => 'Bentley'],
            ['name' => 'BMW'],
        );

        foreach ($cars as $car)
        {
            Car::create($car);
        }

        Model::reguard();
    }
}
