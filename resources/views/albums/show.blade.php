@extends('layouts.app')

@section('content')
    <h2>{{ $album->name }}</h2>
    <a href="/albums" class="btn lime darken-3">
        <i class="material-icons left">replay</i>
        Назад
    </a>
    <a href="/photos/create/{{$album->id}}" class="right btn teal darken-3">
         <i class="material-icons left">add</i>
        Добавить фото
    </a>
   <br>
   <br>
    <hr>
@endsection