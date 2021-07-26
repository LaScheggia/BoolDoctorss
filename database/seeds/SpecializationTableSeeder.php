<?php

use App\Specialization;
use Illuminate\Database\Seeder;

class SpecializationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specializations = [
            "Nessuna specializzazione inserita",
            "Allergologia e immunologia",
            "Anatomia patologica",
            "Chirurgia generale",
            "Chirurgia plastica",
            "Scienze dell'alimentazione",
            "Dermatologia",
            "Geriatria",
            "Ginecologia ed ostetricia",
            "Medicina fisica e riabilitativa",
            "Medicina generale",
            "Medicina interna",
            "Medicina preventiva",
            "Medicina dello sport",
            "Nefrologia",
            "Neurologia",
            "Neuropsichiatria infantile",
            "Oftalmologia",
            "Oncologia",
            "Ortopedia e traumatologia",
            "Ostetricia e ginecologia",
            "Pediatria",
            "Psichiatria",
            "Radioterapia",
            "Scienza dell’alimentazione",
            "Urologia"
        ];

        foreach ($specializations as $specialization) {
            $new_specialization = new Specialization();
            $new_specialization->name = $specialization;
            $new_specialization->save();
        }
    }
}
