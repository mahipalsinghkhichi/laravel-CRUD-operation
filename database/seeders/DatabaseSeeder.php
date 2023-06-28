<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\studentModel;
use App\Models\CandidateModel;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\CandidateModel::factory(20)->create();
    }
    // }
    // public function runcandidates():void{
    //     \App\Models\CandidateModel::factory(20)->create();
    // }
}
