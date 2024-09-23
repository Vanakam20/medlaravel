<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medicaments')->insert([
            ['nomCommercial' => 'Amoxicilline', 'composition' => 'Amoxicilline', 'effets' => 'Traitement des infections bactériennes', 'contreIndications' => 'Allergie à la pénicilline'],
            ['nomCommercial' => 'Paracétamol', 'composition' => 'Paracétamol', 'effets' => 'Réduction de la fièvre et des douleurs', 'contreIndications' => 'Insuffisance hépatique'],
            ['nomCommercial' => 'Ibuprofène', 'composition' => 'Ibuprofène', 'effets' => 'Réduction de l inflammation et de la douleur', 'contreIndications' => 'Ulcères gastro-intestinaux'],
            ['nomCommercial' => 'Loratadine', 'composition' => 'Loratadine', 'effets' => 'Traitement des allergies', 'contreIndications' => 'Hypersensibilité au médicament'],
            ['nomCommercial' => 'Fluoxétine', 'composition' => 'Fluoxétine', 'effets' => 'Traitement de la dépression', 'contreIndications' => "Prise concomitante d'inhibiteurs de la MAO"],
            ['nomCommercial' => 'Dicyclomine', 'composition' => 'Dicyclomine', 'effets' => 'Soulagement des spasmes musculaires', 'contreIndications' => 'Glaucome'],
            ['nomCommercial' => 'Zolpidem', 'composition' => 'Zolpidem', 'effets' => 'Induction du sommeil', 'contreIndications' => 'Myasthénie grave'],
            ['nomCommercial' => 'Aspirine', 'composition' => 'Acide acétylsalicylique', 'effets' => 'Réduction de la fièvre et des douleurs', 'contreIndications' => 'Ulcères gastro-intestinaux'],
            ['nomCommercial' => 'Fluconazole', 'composition' => 'Fluconazole', 'effets' => 'Traitement des infections fongiques', 'contreIndications' => 'Hypersensibilité au médicament'],
            ['nomCommercial' => 'Aciclovir', 'composition' => 'Aciclovir', 'effets' => 'Traitement des infections virales', 'contreIndications' => 'Hypersensibilité au médicament'],
        ]);
    }
}
