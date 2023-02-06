@extends('layouts.main-layout')

@section('content')
    <a href="{{ route('human.create') }}">
        <h4>Create Human</h4>
    </a> 
    <h1>Humans</h1>
    <ul>
        @foreach ($humans as $human)
            <li>
              {{ $human -> firstName }} {{ $human -> lastName }} <br>
              {{ $human -> dateOfBirth }} <br>
              {{ $human -> height }} cm
            </li>
            <a href="{{ route('human.show', $human) }}">
              Show Details
          </a><br>
          <a href="{{ route('human.delete', $human) }}">
            Delete Details
        </a><br>
        <a href="{{ route('human.edit', $human) }}">
            Edit Details
        </a><br>
        @endforeach
    </ul>

@endsection