<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Http\Requests\StoreEtudiantRequest;
use App\Http\Requests\UpdateEtudiantRequest;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('admin.etudiants.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.etudiants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEtudiantRequest $request)
    {
        // dd($request->all());
        // Méthode 1
        //$etudiant = Etudiant::create($request->all());

        // Methode 2
        $etudiant = new Etudiant;
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->age = $request->age;
        $etudiant->filiere_id = $request->filiere_id;
        $etudiant->save();


        // m3
        // $etudiant = Etudiant::create([
        //     'nom' => $request->nom,
        //     'prenom' => $request->prenom,
        //     'age' => $request->age,
        // ]);

        return redirect()->route('etudiants.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        return view('admin.etudiants.show', compact('etudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        return view('admin.etudiants.edit', compact('etudiant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEtudiantRequest $request, Etudiant $etudiant)
    {
        // Methode 2
        $etudiant = Etudiant::find($etudiant->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->age = $request->age;
        $etudiant->filiere_id = $request->filiere_id;
        $etudiant->save();

        return redirect()->route('etudiants.show', $etudiant);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect()->route('etudiants.index');
    }
}
