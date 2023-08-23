<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            [
                "nom" => "Laravel",
            ],
            [
                "nom" => "CCNA",
            ],
            [
                "nom" => "Algo",
            ],
            [
                "nom" => "Maths",
            ],
        ];

        Module::insert($modules);
    }
}
