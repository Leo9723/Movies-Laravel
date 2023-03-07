@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <div class="d-flex justify-content-between">
                <div>
                    <h2>Elenco Cast</h2>
                </div>
            </div>
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <th>Id</th>
                    <th>name_surname</th>
                    <th>Slug</th>
                </thead>
                @forelse($casts as $cast)
                    <tbody>
                        <tr>
                            <td>{{$cast->id}}</td>
                            <td>{{$cast->name_surname}}</td>
                            <td>{{$cast->slug}}</td>
                        </tr>
                    </tbody>
                @empty
                <div>
                    <h1>Non ci sono cast presenti</h1>
                </div>
                @endforelse
            </table>
        </div>
    </div>
</div>
@endsection