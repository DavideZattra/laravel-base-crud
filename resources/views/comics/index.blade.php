@extends('layouts.main')

@section('content')
    <h1>Sono il comics.index</h1>
    <a href="{{ route('comics.create')}}">Insert a new comic</a>
    @foreach ($comics as $comic )
        <div>
            <img src="{{$comic->url}}" width="200" alt="">
            <h3>{{$comic->title}}</h3>
            <p>{{$comic->description}}</p>
            <a href="{{ route('comics.show', ['comic'=> $comic->id])}}">Read more</a>

        </div>
        
    @endforeach
@endsection
