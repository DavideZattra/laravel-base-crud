@extends('layouts.main')

@section('title', 'Comics')
    

@section('content')

    <section id="comic-list" class="container">

        <div class="row">

            @foreach ($comics as $comic )
            
                <div class="col-6 comic-card">
        
                    <img src="{{$comic->url}}" width="150" alt="{{ $comic->title }} cover">
                    <h3>{{$comic->title}}</h3>
                    <div class="comic-description overflow-auto">
                        
                        <p>{{$comic->description}}</p>

                    </div>
                    <a href="{{ route('comics.edit', ['comic'=>$comic])}}" class="btn btn-primary" >Edit Comic</a>
                    <a href="{{ route('comics.show', ['comic'=> $comic->id])}}" class="btn btn-primary" >Read more</a>
        
                </div>
                
            @endforeach

        </div>

    </section>

@endsection
