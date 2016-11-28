<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\CarModel;

class ModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('models')->delete();

        $models = array(
            ['name' => 'A1', 'car_id' => 1],
            ['name' => 'A2', 'car_id' => 1],
            ['name' => 'A3', 'car_id' => 1],
            ['name' => 'A4', 'car_id' => 1],
            ['name' => 'X1', 'car_id' => 4],
            ['name' => 'X1', 'car_id' => 4],
        );

        foreach ($models as $model)
        {
            CarModel::create($model);
        }

        Model::reguard();
    }
}
