@extends('layouts.main-layout')

@section('content')
    
    <h1>Edit Human</h1>
    <form method="POST" action="{{ route('human.update', $human) }}">
        @csrf
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" value={{ $human -> firstName }}>
        <br>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" value={{ $human -> lastName }}>
        <br>
        <label for="dateOfBirth">Date Of Birth</label>
        <input type="date" name="dateOfBirth" value={{ $human -> dateOfBirth }}>
        <br>
        <label for="height">Height</label>
        <input type="text" name="height" value={{ $human -> height }}>
        <br>
        <input type="submit" value="UPDATE HUMAN">
    </form>

@endsection