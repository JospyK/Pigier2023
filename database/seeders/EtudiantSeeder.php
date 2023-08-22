<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $etudiants = [
            [
                "nom" => "GANDONOU",
                "prenom" => "Victoire",
                "age" => 19,
                "filiere_id" => 1,
            ],
            [
                "nom" => "AMOUSSOU",
                "prenom" => "Yann",
                "age" => 17,
                "filiere_id" => 2,
            ],
        ];

        Etudiant::insert($etudiants);
    }
}
