<?php

namespace Database\Seeders;

use App\Models\mountains;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MountainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mountains')->insert([
            'name'=>'Everest',
            'height'=>'8202',
            'belongsToRange'=>'true',
            'firstClimbDate'=>'1953-05-29',
            'continent'=>'Asia',
        ]);
    }
}
