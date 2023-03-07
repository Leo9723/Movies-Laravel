<?php

namespace App\Http\Controllers\Admin;

use App\Models\Genere;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGenereRequest;
use App\Http\Requests\UpdateGenereRequest;

class GenereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGenereRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGenereRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genere  $genere
     * @return \Illuminate\Http\Response
     */
    public function show(Genere $genere)
    {
        return view('admin.generes.show', compact('genere'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genere  $genere
     * @return \Illuminate\Http\Response
     */
    public function edit(Genere $genere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGenereRequest  $request
     * @param  \App\Models\Genere  $genere
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGenereRequest $request, Genere $genere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genere  $genere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genere $slug)
    {
        $genere = Genere::findOrFail($slug);
        $genere->delete();

        return redirect()->route('admin.generes.index')->with('deleteMessage', $genere->genre.' Eliminato correttamente');
    }
}
