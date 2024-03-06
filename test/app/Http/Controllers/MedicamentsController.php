<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicament;

class MedicamentsController extends Controller
{
    public function index()
    {
        $Medicament = Medicament::all();
        return view('Medicaments.index', compact('Medicament'));
    }
}
