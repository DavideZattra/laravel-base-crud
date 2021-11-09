@extends('layouts.main')

@section('content')

    <a href="{{ route('comics.index')}}">Back to comics</a>

    <form action="{{ route('comics.store')}}" method="POST">
        @csrf

        <div>

            <input type="text" id="title" name="title" placeholder="inserisci il titolo" required>
            
        </div>

        <div>
            
            <input type="text" id="author" name="author" placeholder="inserisci l'autore" required>
            
        </div>

        <div>
            
            <input type="text" id="description" name="description" placeholder="inserisci la descrizione" required>
            
        </div>

        <div>
            
            <input type="text" id="url" name="url" placeholder="inserisci l'url della copertina" required>
            
        </div>

        
        <button type="reset">resetta i campi</button>
        <button type="submit">inserisci il nuovo Fumetto</button>
        
    </form>
@endsection
