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
        return view('admin.generes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGenereRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGenereRequest $request)
    {
        $form_data = $request->validated();

        $newGenere = new Genere();

        $slug = Genere::generateSlug($form_data['genere']);

        $form_data['slug'] = $slug;

        $newGenere->fill($form_data);

        $newGenere->save();

        return redirect()->route('admin.generes.index')->with('message', $newGenere->title.' aggiunto con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genere  $genere
     * @return \Illuminate\Http\Response
     */
    public function show(Genere $genere)
    {
        //
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
    public function destroy(Genere $genere)
    {
        //
    }
}
