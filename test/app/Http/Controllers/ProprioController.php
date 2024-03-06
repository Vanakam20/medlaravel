<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProprioController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proprietaires = proprietaires::all();
    return view('proprietaires.index', compact('proprietaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proprietaires.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:100',
            'detail' => 'required|max:500',
        ]);
        $proprietaires = new proprietaires;
        $proprietaires->title = $request->title;
        $proprietaires->detail = $request->detail;
        $proprietaires->save();
        return back()->with('message', "La tâche a bien été créée !");
    }

    /**
     * Display the specified resource.
     */
    public function show(proprietaires $proprietaires)
    {
        return view('proprietaires.show', compact('proprietaires'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(proprietaires $proprietaires)
    {
        return view('proprietaires.edit', compact('proprietaires'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, proprietaires $proprietaires)
    {
        $data = $request->validate([
            'title' => 'required|max:100',
            'detail' => 'required|max:500',
        ]);
        $proprietaires->title = $request->title;
        $proprietaires->detail = $request->detail;
        $proprietaires->state = $request->has('state');
        $proprietaires->save();
        return back()->with('message', "La tâche a bien été modifiée !");        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(proprietaires $proprietaires)
{
    $proprietaires->delete();
}
}
