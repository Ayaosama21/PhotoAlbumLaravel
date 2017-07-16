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

    @if(count($album->photos) > 0)
    <?php
      $colcount = count($album->photos);
  	  $i = 1;
    ?>
    <div id="photos">
    <div class="container">
        <div class="row center-align">
            @foreach($album->photos as $photo)
                @if($i == $colcount)
                    <div class='col s4'>
                    <a href="/photos/{{$photo->id}}">
                        <img style="width:200px; height: 150px" class="hoverable" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                        </a>
                    <br>
                    <h5>{{$photo->title}}</h5>
                @else
                   <div class='col s4'>
                    <a href="/photos/{{$photo->id}}">
                        <img style="width:200px; height: 150px" class="hoverable" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                        </a>
                    <br>
                    <h5>{{$photo->title}}</h5>
                @endif
                    @if($i % 3 == 0)
                </div></div><div class="row center-align">
                    @else
                    </div>
                @endif
                    <?php $i++; ?>
            @endforeach
        </div>
      </div>
    </div>
  @else
    <p class="card-panel blue lighten-5">Добавьте фотографии</p>
  @endif

@endsection