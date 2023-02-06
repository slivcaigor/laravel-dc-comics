@extends('layouts.main-layout')

@section('content')
    
    <h1>Humans</h1>
    <ul>
        @foreach ($humans as $human)
            <li>
              {{ $human -> firstName }} {{ $human -> lastName }} <br>
              {{ $human -> dateOfBirth }} <br>
              {{ $human -> heigth }} cm
            </li>
            <a href="{{ route('human.show', $human) }}">
              Show Details
          </a>
        @endforeach
    </ul>

@endsection