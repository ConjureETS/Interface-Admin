<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class DefaultUserTableSeeder extends Seeder
{
    private $members = [
        ["Conjure", "ETS", "conjure@etsmtl.ca", "000000", "A2019", 1, 0, 2],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->truncate();
        DB::table('users')->truncate();

        foreach($this->members as $key => $data) {
            \App\Models\Member::create([
                "first_name" => $data[0],
                "last_name" => $data[1],
                "email" => $data[2],
                "universal_code" => $data[3],
                "start_semester" => $data[4],
                "program_id" => $data[5],
                "activity" => $data[6],
                "preferred_communication_method_id" => $data[7]
            ]);

            \App\User::create([
                "member_id" => $key + 1,
                "password" => \Illuminate\Support\Facades\Hash::make(strtolower($data[0][0].$data[1])."-".$data[4]."&".\App\Models\Program::where("id", $data[5])->first()["acronym"])
            ]);
        }
    }
}
