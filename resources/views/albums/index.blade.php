@extends('layouts.app')

@section('content')

    <h1>Albums</h1>

  @if(count($albums) > 0)
    <?php
      $colcount = count($albums);
  	  $i = 1;
    ?>
    <div id="albums">
    <div class="container">
        <div class="row center-align">
            @foreach($albums as $album)
                @if($i == $colcount)
                    <div class='col s4'>
                    <a href="/albums/{{$album->id}}">
                        <img class="z-depth-3" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
                        </a>
                    <br>
                    <h5>{{$album->name}}</h5>
                @else
                    <div class='col s4'>
                    <a href="/albums/{{$album->id}}">
                        <img class="z-depth-3" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
                    </a>
                    <br>
                    <h5>{{$album->name}}</h5>
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
    <p>No Albums To Display</p>
  @endif

@endsection