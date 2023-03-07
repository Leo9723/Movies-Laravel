<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cast;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCastRequest;
use App\Http\Requests\UpdateCastRequest;

class CastController extends Controller
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
        return view('admin.casts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCastRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCastRequest $request)
    {
        $form_data = $request->validated();

        $newCast = new Cast();
        
        $slug = Cast::generateSlug($form_data['name_surname']);

        $form_data['slug'] = $slug;

        $newCast->fill($form_data);

        $newCast->save();

        return redirect()->route('admin.casts.index')->with('message', $newCast->title.' aggiunto con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cast  $cast
     * @return \Illuminate\Http\Response
     */
    public function show(Cast $cast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cast  $cast
     * @return \Illuminate\Http\Response
     */
    public function edit(Cast $cast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCastRequest  $request
     * @param  \App\Models\Cast  $cast
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCastRequest $request, Cast $cast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cast  $cast
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cast $cast)
    {
        //
    }
}
