<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Http\Requests\StoreModuleRequest;
use App\Http\Requests\UpdateModuleRequest;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules = Module::all();
        return view('admin.modules.index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModuleRequest $request)
    {
        // dd($request->all());
        // Méthode 1
        //$module = Module::create($request->all());

        // Methode 2
        $module = new Module;
        $module->nom = $request->nom;
        $module->save();

        return redirect()->route('modules.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        return view('admin.modules.show', compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        return view('admin.modules.edit', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModuleRequest $request, Module $module)
    {
        // Methode 2
        $module = Module::find($module->id);
        $module->nom = $request->nom;
        $module->save();

        return redirect()->route('modules.show', $module);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return redirect()->route('modules.index');
    }
}
