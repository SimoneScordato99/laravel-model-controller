@extends('layout.welcome')

@section('content')

    @foreach( $movies as $elem )
        <h2>{{ $elem['title'] }}</h2>
    @endforeach

@endsection