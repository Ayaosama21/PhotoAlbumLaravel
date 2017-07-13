@extends('layouts.app')

@section('content')
    <h3>Create Album</h3>
    <div class="row">
        {!! Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'col s10']) !!}
            <div class="row">
                <div class="input-field col s8">
                   {{ Form::text('name', '', ['class' => 'input-field col s10', 'id' => 'name_album']) }}
                   <label for="name_album">Name Album</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8">
                     {{ Form::textarea('description', '', ['class' => 'materialize-textarea col s10', 'id' => 'desc_album']) }}
                    <label for="desc_album">Album Description</label>
                </div>
            </div>
            <div class="row file-field input-field">
                <div class="btn">
                    <span>File</span>
                     {{ Form::file('cover_image') }}
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload one or more files">
                </div>
            </div>
            <div class="row ">
                {{ Form::submit('submit', ['class' => 'waves-effect waves-light btn-large']) }}
            </div>
        {!! Form::close() !!}
    </div>
@endsection