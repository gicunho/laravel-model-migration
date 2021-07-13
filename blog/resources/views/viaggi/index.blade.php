@extends('layout.app')
@section('titolo', 'BooTravels Trips')

@section('content')
    <div class="trips">
        @foreach ($trips as $trip)
        <div class="trip">
            <h3>{{$trip['location']}}</h3>
            <h4>Hotel: {{$trip->hotel_name}} @if($trip->hotel_stars) - {{$trip->hotel_stars}} <span >stelle</span> @endif</h4>
            <h5>Data di partenza: {{$trip->departure_date}}</h5>
            <h5>Data di ritorno: {{$trip->return_date}}</h5>
            <h5>Prezzo: {{$trip->price}} €</h5>
        </div>
        @endforeach
    </div>

@endsection