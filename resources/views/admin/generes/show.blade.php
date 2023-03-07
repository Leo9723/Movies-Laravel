@extends('layouts.admin');

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="py-3">Genere: {{ $genere->genre }}</h2>
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}    
                </div>            
            @endif
            <div class="d-flex gap-3 pb-3">
                <a href="{{ route('admin.generes.index') }}" class="btn btn-square btn-primary">Torna all'elenco</a>
                <a href="{{ route('admin.generes.edit', $genere->slug) }}" title="Modifica tipologia" class="btn btn-square btn-warning">
                    Modifica
                </a>
                <form class="d-inline-block" action="{{ route('admin.generes.destroy', $genere->slug) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button genere="submit" class="btn btn-square btn-danger">
                        Elimina
                    </button>
                </form>
            </div>
            <div>
                <p>Slug: {{ $genere->slug }}</p>
            </div>
            <div class="col-12">
                <h4>Post con questo genere: {{ count($genere->movie) }}</h4>
                <div class="row">
                    @forelse ($genere->movies as $movie)
                    <div class="col-6">
                        <div class="card text-center m-3 p-2 bg-dark text-light">
                            <h4>{{ $genere->genre }}</h4>
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.posts.show', $genere->slug) }}">Apri il post</a> 
                        </div>    
                    </div>                    
                @empty
                    <h6 class="text-center">Non ci sono posto per questa categoria</h6>
                @endforelse
                </div>               
            </div>
        </div>
    </div>
</div>

@endsection