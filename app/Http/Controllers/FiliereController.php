<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Http\Requests\StoreFiliereRequest;
use App\Http\Requests\UpdateFiliereRequest;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filieres = Filiere::all();
        return view('admin.filieres.index', compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.filieres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFiliereRequest $request)
    {
        // dd($request->all());
        // Méthode 1
        //$filiere = Filiere::create($request->all());

        // Methode 2
        $filiere = new Filiere;
        $filiere->nom = $request->nom;
        $filiere->save();

        return redirect()->route('filieres.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Filiere $filiere)
    {
        return view('admin.filieres.show', compact('filiere'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filiere $filiere)
    {
        return view('admin.filieres.edit', compact('filiere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFiliereRequest $request, Filiere $filiere)
    {
        // Methode 2
        $filiere = Filiere::find($filiere->id);
        $filiere->nom = $request->nom;
        $filiere->save();

        return redirect()->route('filieres.show', $filiere);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filiere $filiere)
    {
        $filiere->delete();
        return redirect()->route('filieres.index');
    }
}
