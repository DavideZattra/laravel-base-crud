@extends('layouts.main')

@section('title', 'Comics')
    

@section('content')

    <section id="comic-list" class="container">

        <div class="row">

            @forelse ($comics as $comic )
            
                <div class="col-6 comic-card">
        
                    <img src="{{$comic->url}}" width="150" alt="{{ $comic->title }} cover">

                    <form action="{{ route('comics.destroy', $comic ) }}" method="post">
                        
                        @csrf

                        @method('DELETE')

                        <input class="btn btn-danger" type="submit" value="Delete Comic">

                    </form>

                    <h3>{{$comic->title}}</h3>
                    <div class="comic-description overflow-auto">
                        
                        <p>{{$comic->description}}</p>

                    </div>
                    <a href="{{ route('comics.edit', ['comic'=>$comic])}}" class="btn btn-primary" >Edit Comic</a>
                    <a href="{{ route('comics.show', ['comic'=> $comic->id])}}" class="btn btn-primary" >Read more</a>
        
                </div>

                @empty
                    <h4>There are 0 comics in your database</h4>
                
                
            @endforelse

        </div>

    </section>

@endsection
