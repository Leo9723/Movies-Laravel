@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <div class="d-flex justify-content-between">
                <div>
                    <h2>Elenco Genere</h2>
                </div>
            </div>
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <th>Id</th>
                    <th>Genere</th>
                    <th>Slug</th>
                </thead>
                @forelse($generes as $genere)
                    <tbody>
                        <tr>
                            <td>{{$genere->id}}</td>
                            <td>{{$genere->genere}}</td>
                            <td>{{$genere->slug}}</td>
                        </tr>
                    </tbody>
                @empty
                <div>
                    <h1>Non ci sono generi presenti</h1>
                </div>
                @endforelse
            </table>
        </div>
    </div>
</div>
@endsection