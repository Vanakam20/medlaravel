<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offrir;
use App\Models\Medicament;
use App\Models\Rapport;

class offrirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($rapport_id)
    {
        $rapport = Rapport::findOrFail($rapport_id);
        $medicaments = Medicament::all();
        return view('offrir.create', compact('rapport', 'medicaments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Valider les données du formulaire
         $validatedData = $request->validate([
            'rapport_id' => 'required|exists:rapports,id',
            'medicament_id' => 'required|exists:Medicaments,id',
            'quantite' => 'required|max:100',
        ]);

        // Créer un nouveau rapport avec les données validées
        Offrir::create($validatedData);

        return back()->with('message', 'offre créé avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $offrir = Offrir::findOrFail($id);
        $medicament = $offrir->medicament; // Accéder au médicament associé
    
        return view('offrir.show', compact('offrir', 'medicament'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(offrir $offrir)
    {
        return view('offrir.edit', compact('offrir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, offrir $offrir)
    {
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(offrir $offrir)
    {
        $offrir->delete();
        return redirect()->route('offrir.index');
    }
}
