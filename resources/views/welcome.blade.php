@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <a href="{{ route('comics.index') }}" class="btn btn-primary">Mostrami tutto</a>

@endsection