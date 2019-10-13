<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommunicationMethodTableSeeder extends Seeder
{
    private $data =[
        "Discord", "Facebook", "E-Mail", "Autre"
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('communication_methods')->truncate();

        foreach($this->data as $value) {
            DB::table('communication_methods')->insert([
                'name' => $value,
            ]);
        }
    }
}
