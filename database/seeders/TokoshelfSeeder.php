<?php

namespace Database\Seeders;

use App\Models\Tokoshelf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TokoshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Tokoshelf::insert([
            [
                'id' => '1',
                'code' => '620',
                'nama' =>'TokoBerlian1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '2',
                'code' =>'621',
                'name' => 'TokoBerlian2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3',
                'code' =>'622',
                'name' => 'TokoBerlian3',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
