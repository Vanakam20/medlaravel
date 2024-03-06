<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medecin;

class MedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medecin = Medecin::all();
        return view('medecin.index', compact('medecin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medecin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'cp' => 'required|string|max:10',
            'tel' => 'required|string|max:20',
            'speComplementaire' => 'nullable|string|max:255',
            'departement' => 'required|string|max:255',
        ]);

        $medecin = new Medecin();
        $medecin->nom = $request->input('nom');
        $medecin->prenom = $request->input('prenom');
        $medecin->adresse = $request->input('adresse');
        $medecin->ville = $request->input('ville');
        $medecin->cp = $request->input('cp');
        $medecin->tel = $request->input('tel');
        $medecin->speComplementaire = $request->input('speComplementaire');
        $medecin->departement = $request->input('departement');

        $medecin->save();
        return back()->with('message', "Le medecin a bien été créée !");
    }

    /**
     * Display the specified resource.
     */
    public function show(medecin $medecin)
    {
        return view('medecin.show', compact('medecin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(medecin $medecin)
    {
        return view('medecin.edit', compact('medecin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, medecin $medecin)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'cp' => 'required|string|max:10',
            'tel' => 'required|string|max:20',
            'speComplementaire' => 'nullable|string|max:255',
            'departement' => 'required|string|max:255',
        ]);

        $medecin->nom = $request->input('nom');
        $medecin->prenom = $request->input('prenom');
        $medecin->adresse = $request->input('adresse');
        $medecin->ville = $request->input('ville');
        $medecin->cp = $request->input('cp');
        $medecin->tel = $request->input('tel');
        $medecin->speComplementaire = $request->input('speComplementaire');
        $medecin->departement = $request->input('departement');

        $medecin->save();
        return back()->with('message', "Le medecin a bien été modifiée !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(medecin $medecin)
    {
        $medecin->delete();
        return redirect()->route('medecin.index');
    }
}
