@extends('layouts.main-layout')

@section('content')
    
    <h3>Name: {{ $human -> firstName }} {{ $human -> lastName }}</h3>
    <h5>Date of Birth: {{ $human -> dateOfBirth }}</h5>
    <h5>
      {{ $human -> height }} cm
    </h5>
@endsection