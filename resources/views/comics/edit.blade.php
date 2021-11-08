@extends('layouts.main')

@section('content')

    <a href="{{ route('comics.index')}}">Back to comics</a>

    <form action="{{ route('comics.update', $comic )}}" method="POST">
        
        @method('PATCH')
        @csrf

        <div>

            <input type="text" id="title" name="title" placeholder="inserisci il titolo" value="{{ $comic->title }}" required>
            
        </div>

        <div>
            
            <input type="text" id="author" name="author" placeholder="inserisci l'autore" value="{{ $comic->author }}" required>
            
        </div>

        <div>
            
            <input type="text" id="description" name="description" placeholder="inserisci la descrizione" value="{{ $comic->description }}" required>
            
        </div>

        <div>
            
            <input type="text" id="url" name="url" placeholder="inserisci l'url della copertina" value="{{ $comic->url }}" required>
            
        </div>

        <button type="reset">resetta i campi</button>
        <button type="submit">inserisci il nuovo ospite</button>
        
    </form>
@endsection
