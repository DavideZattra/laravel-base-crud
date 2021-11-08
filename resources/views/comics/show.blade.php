@extends('layouts.main')

@section('content')
    <h1>Io sono comics.show</h1>

    <a href="{{ route('comics.index')}}">Back to comics</a>

    <div>
        <img src="{{$comic->url}}" width="200" alt="">
        <h3>{{$comic->title}}</h3>
        <p>{{$comic->description}}</p>
    </div>
@endsection


