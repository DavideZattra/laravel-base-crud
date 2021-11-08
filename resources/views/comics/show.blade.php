@extends('layouts.main')

@section('content')

    <a href="{{ route('comics.index')}}">Back to comics</a>

    <div>
        <img src="{{$comic->url}}" width="200" alt="">
        <h3>{{$comic->title}}</h3>
        <p>{{$comic->description}}</p>
    </div>
@endsection


