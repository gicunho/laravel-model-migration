@extends('layout.app')
@section('titolo', 'BooTravels Trips')

@section('content')
    @foreach ($trips as $trip)
        <h1>{{$trip['location']}}</h1>
    @endforeach
@endsection