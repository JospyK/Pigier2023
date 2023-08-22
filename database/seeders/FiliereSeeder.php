<?php

namespace Database\Seeders;

use App\Models\Filiere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filieres = [
            [
                "nom" => "Reseaux et Génie Logiciel",
            ],
            [
                "nom" => "Communication Digitale et Marketing",
            ],
        ];

        Filiere::insert($filieres);
    }
}
