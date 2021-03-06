@extends('layouts.app')

@section('content')
    <h3>Создать Альбом</h3>
    <div class="row">
        {!! Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'col s10']) !!}
            <div class="row">
                <div class="input-field col s8">
                   {{ Form::text('name', '', ['class' => 'input-field col s10', 'id' => 'name_album']) }}
                   <label for="name_album">Название альбома</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8">
                     {{ Form::textarea('description', '', ['class' => 'materialize-textarea col s10', 'id' => 'desc_album']) }}
                    <label for="desc_album">Описание альбома</label>
                </div>
            </div>
            <div class="row file-field input-field">
                <div class="btn">
                    <span>Фото</span>
                     {{ Form::file('cover_image') }}
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate col s6" type="text" placeholder="">
                </div>
            </div>
            <div class="row ">
                 <button type="submit" value="Добавить" class="btn cyan accent-4">
                    <i class="material-icons left">library_add</i>
                    Добавить
                </button>
            </div>
        {!! Form::close() !!}
    </div>
@endsection