@extends('layouts.app')

@section('content')
<h1>Gym: {{$gym->name}}</h1>

<ul>
    <li>Description: {{$gym->description}} </li>
    <li>Location: {{$gym->location}}</li>
    <li>Opening Hours: {{$gym-> opening_hours}}</li>
    <li>Contact: {{$gym->contact}}</li>
</ul>
    
    note:need to find a way to add and display pics
    
    
   

@endsection