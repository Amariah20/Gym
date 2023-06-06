@extends('layouts.app')

@section('content')

    @foreach($gyms as $gym)
    <h1>Gym: {{$gym->name}}</h1>

<ul>
    <li>Description: {{$gym->description}} </li>
    <li>Location: {{$gym->location}}</li>
    <li>Opening Hours: {{$gym-> opening_hours}}</li>
    <li>Contact: {{$gym->contact}}</li>
</ul>
    @endforeach
   


@endsection()