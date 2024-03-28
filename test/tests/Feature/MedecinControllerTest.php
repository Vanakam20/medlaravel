<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Medecin;

class MedecinControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_medecin_can_be_created()
    {
        // Création des données de médecin pour le test
        $medecinData = [
            'nom' => 'Dr. Smith',
            'prenom' => 'John',
            'adresse' => '123 Rue Principale',
            'ville' => 'Paris',
            'cp' => '75000',
            'tel' => '0123456789',
            'speComplementaire' => 'Cardiologue',
            'departement' => 'Cardiologie',
        ];

        // Envoi d'une requête POST pour créer un médecin
        $response = $this->post('/medecins/store', $medecinData);


        // Vérification de l'existence du médecin dans la base de données
        $this->assertDatabaseHas('medecins', $medecinData);
    }
}