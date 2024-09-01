<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lista = Programa::all();
        return view('programas.index', ['lista'=>$lista]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('programas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ 
            'numeroFicha' => 'required', 
            'nombrePrograma' => 'required'            
            ]); 
            
            Programa::create($request->all()); 
            return redirect()->route('programas.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $programa = Programa::findOrFail($id);
        return view('programas.show', compact('programa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $programa = Programa::findOrFail($id);
        return view('programas.edit', compact('programa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'numeroFicha' => 'required',
            'nombrePrograma' => 'required',
        ]);

        $programa = Programa::findOrFail($id);
        $programa->numeroFicha = $request->numeroFicha;
        $programa->nombrePrograma = $request->nombrePrograma;
        $programa->save();

        return redirect()->route('programas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $programa = Programa::findOrFail($id);
        $programa-> delete();

        return redirect()->route('programas.index');
    }
}
