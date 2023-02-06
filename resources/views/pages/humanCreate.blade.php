@extends('layouts.main-layout')

@section('content')
    
    <h1>New human</h1>
    <form method="POST" action="{{ route('human.store') }}">
        @csrf
        <label for="firstName">First Name</label>
        <input type="text" name="firstName">
        <br>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName">
        <br>
        <label for="dateOfBirth">Date Of Birth</label>
        <input type="date" name="dateOfBirth">
        <br>
        <label for="height">Height</label>
        <input type="text" name="height">
        <br>
        <input type="submit" value="CREATE NEW HUMAN">
    </form>

@endsection