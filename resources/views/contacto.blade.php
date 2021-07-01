@extends('layouts.layout')

@section('content')

<form action="POST" action="{{route('contacto') }}">

        @csrf
    <input type="text" name="name" id=""><br>
    <input type="email" name="email" id=""><br>
    <input type="text" name="subject" id=""><br>
    <textarea name="contect" id="" cols="30" rows="10"></textarea><br>
    <button>Enviar---------------------</button>
</form>
@endsection()
