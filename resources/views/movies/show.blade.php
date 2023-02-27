@extends('layouts.app')

@section('content')
{{-- riga blue --}}
<div class="blue"></div>
<div class="container my-2">
    {{-- sezione superiore --}}
    <div class="card-jumbo my-2">
        <div class="position">
            <div class="view">
                <img class="thumb" src="{{ $movie['cover_path'] }}" alt="{{ $movie['title'] }}">
                <div class="gallery">View Gallery</div>
                <div class="fumetto">{{ $movie['vote'] }}</div>
            </div>
        </div>
        <div class="d-flex">
            <div>
                <div class="title">
                    <h4>{{ $movie['title'] }}</h4>
                </div>
                <div class="green">
                    <div class="avaible col-7">
                        <span>Vote: <span class="text-white">{{ $movie['vote'] }}</span></span>
                        <span>Avaiable</span>
                    </div>
                    <div class="check-avaible col-3">
                        <span class="text-white">Check Availability</span>
                    </div>
                </div>
                <div class="col-10">
                    <p>{{$movie['cast']}}</p>
                </div>
            </div>
            <div class="advertisement">
                <span class="adv">Advertisement</span>
            </div>
        </div>
    </div>
    {{-- seizione inferiore --}}
    <div class="section-talent-specs">
        <div class="talent-and-specs">
            <div class="talent col-5">
                <h2>Talent</h2>
                <p>Art by: <a href="/"> ... </a></p>
                <p>Written by: <a href="/"> ... </a></p>
            </div>
            <div class="specs col-5">
                <h2>Specs</h2>
                <p>Original title: <a href="/">{{ $movie['original_title'] }}</a></p>
                <p>Vote: {{ $movie['vote'] }}</p>
                <p>Release date: {{ $movie['release_date'] }}</p> 
            </div>
        </div>
    </div>
</div>
@endsection