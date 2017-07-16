@extends('layouts.app')

@section('content')
    <h3>{{ $photo->title }}</h3>
    <p>{{ $photo->description }}</p>
    <a href="/albums/{{$photo->album_id}}" class="btn lime darken-3">
        <i class="material-icons left">replay</i>
        Назад
    </a>
    <hr>

    <img class="center-align" src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" alt="{{ $photo->title }}">

    <br>
    <br>
    {!! Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method'=>'POST']) !!}    
        {!! Form::hidden('_method', 'DELETE') !!}
        {!! Form::submit('Delete Photo', ['class' => 'btn red darken-1']) !!}
    {!! Form::close() !!}

    <hr>
    <small>Размер: {{ $photo->size }}</small>
    
@endsection