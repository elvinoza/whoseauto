<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Auto;

class AutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('autos')->delete();

        $this->generate();

        Model::reguard();
    }

    private function generate(){
        $allChars = [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
            'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
            'U', 'V', 'W', 'Y', 'X', 'Z'
        ];

        $allNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

        $allCharsCombinations = $this->sampling($allChars, 3);
        $allNumbersCombinations = $this->sampling($allNumbers, 3);

        foreach($allCharsCombinations as $chars)
        {
            foreach($allNumbersCombinations as $number)
            {
                Auto::create(['number' => $chars . $number]);
            }
        }
    }

    private function sampling($chars, $size, $combinations = array()) {

        if (empty($combinations)) {
            $combinations = $chars;
        }

        if ($size == 1) {
            return $combinations;
        }

        $new_combinations = array();

        foreach ($combinations as $combination) {
            foreach ($chars as $char) {
                $new_combinations[] = $combination . $char;
            }
        }

        return $this->sampling($chars, $size - 1, $new_combinations);
    }
}
