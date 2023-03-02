<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\Validator;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();

        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $this->validation($request->all());


        $movies = config('movies');

        $newMovie = new Movie();

        $newMovie->fill($form_data);

        $newMovie->save();

        return redirect()->route('admin.movies.index', $newMovie->id)->with('message', 'Film aggiunto correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);

        return view('admin.movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);

        return view('admin.movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);

        $form_data = $this->validation($request->all());

        
        $movie->update($form_data); 

        return redirect()->route('admin.movies.index' , [ 'movie' => $movie -> id])->with('message', 'Film corretto correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return redirect()->route('admin.movies.index')->with('message', 'Film Eliminato correttamente');
    }

    private function validation($data){

        $validator = Validator::make($data, [
            'title' => 'required|max:150',
            'original_title' => 'required|max:150',
            'nationality' => 'required|max:50',
            'release_date' => 'required|date_format:Y-m-d',
            'vote' => 'required|max:20',
            'cast' => 'required',
            'cover_path' => 'nullable',

        ],
        [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo è superiore a :max caratteri',
            'original_title.required' => 'Il titolo originale è obbligatorio',
            'original_title.max' => 'Il titolo originale è superiore a :max caratteri',
            'nationality.required' => 'Il titolo è obbligatorio',
            'nationality.max' => 'Il titolo è superiore a :max caratteri',
            'release_date.required' => 'Il titolo è obbligatorio',
            'release_date.date_format' => 'Il titolo è superiore a :max caratteri',
            'vote.required' => 'Il titolo è obbligatorio',
            'cast.required' => 'Il titolo è obbligatorio',
        ]
        )->validate();

        return $validator;
    }
}
