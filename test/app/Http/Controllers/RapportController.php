<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rapport;
use App\Models\User;
use App\Models\Medecin;
use App\Models\Offrir;

class RapportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rapport = Rapport::with('patient', 'medecin')->get();
        return view('rapport.index', compact('rapport'));
    }

    public function search(Request $request)
    {
        $dateCreation = $request->input('date_creation');

        // Recherche des rapports créés à la date spécifiée
        $rapport = Rapport::where('created_at', 'like', $dateCreation."%");

        return view('rapport.index', compact('rapport'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $visiteurs = User::all();
        $medecins = Medecin::all();
        return view('rapport.create', compact('visiteurs', 'medecins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Valider les données du formulaire
         $validatedData = $request->validate([
            'visiteur_id' => 'required|exists:users,id',
            'medecin_id' => 'required|exists:medecins,id',
            'motif' => 'required|string|max:255',
            'bilan' => 'required|string',
        ]);

        // Créer un nouveau rapport avec les données validées
        Rapport::create($validatedData);
        $rapport = new Rapport();

        return back()->with('message', 'Rapport créé avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $rapport = Rapport::with('offrir.medicament')->findOrFail($id);
    
        return view('rapport.show', compact('rapport'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $rapport = Rapport::findOrFail($id);
        return view('rapport.edit', compact('rapport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, rapport $rapport)
    {
        $request->validate([
            'visiteur_id' => 'required|exists:users,id',
            'medecin_id' => 'required|exists:medecins,id',
            'motif' => 'required|string|max:255',
            'bilan' => 'required|string',

        ]);
        $rapport->motif = $request->input('motif');
        $rapport->bilan = $request->input('bilan');
        
        $rapport->visiteur_id = $request->input('visiteur_id');
        $rapport->medecin_id = $request->input('medecin_id');

        $rapport->save();

    // Rediriger l'utilisateur vers la page de détails du rapport
    return redirect()->route('rapport.index')->with('success', 'Rapport mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rapport $rapport)
    {
        $rapport->delete();
        return redirect()->route('rapport.index');
    }
}
