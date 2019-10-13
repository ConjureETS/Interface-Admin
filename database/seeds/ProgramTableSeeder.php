<?php

use Illuminate\Database\Seeder;

class ProgramTableSeeder extends Seeder
{
    private $data = [
        ["LOG", "Génie logiciel"],
        ["TI", "Génie des technologies de l'information"],
        ["ELE", "Génie électrique"],
        ["GOL", "Génie des opérations et de la logistique"],
        ["GPA", "Génie de la production automatisée"],
        ["MEC", "Génie mécanique"],
        ["CTN", "Génie de la construction"],
        ["CUT", "Cheminement universitaire en technologie"],
        ["Maîtrise", "Maîtrise"],
        ["Doctorat", "Doctorat"]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->truncate();

        foreach($this->data as $value) {
            DB::table('programs')->insert([
                'acronym' => $value[0],
                'name' => $value[1],
            ]);
        }
    }
}
