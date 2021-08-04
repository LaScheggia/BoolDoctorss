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
            "Allergologia e immunologia",
            "Anatomia patologica",
            "Chirurgia generale",
            "Chirurgia plastica",
            "Chirurgia Vascolare",
            "Chirurgia Maxillo Facciale",
            "Dermatologia",
            "Ematologia",
            "Geriatria",
            "Ginecologia ed ostetricia",
            "Medicina fisica e riabilitativa",
            "Medicina generale",
            "Medicina interna",
            "Medicina preventiva",
            "Medicina dello sport",
            "Nefrologia",
            "Neurochirurgia",
            "Neuropediatria",
            "Neurologia",
            "Neuropsichiatria infantile",
            "Oftalmologia",
            "Oncologia",
            "Ortopedia e traumatologia",
            "Ostetricia e ginecologia",
            "Pediatria",
            "Psichiatria",
            "Radiologia",
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
