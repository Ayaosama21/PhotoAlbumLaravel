@if (count($errors) > 0)
    @foreach($errors->all() as $error)
         <div class="card-panel red lighten-1 white-text">
            {{ $error }} 
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="card-panel green darken-1 white-text">
        {{ session('success') }} 
    </div>
@endif

@if(session('error'))
    <div class="card-panel red lighten-1 white-text">
        {{ session('error') }} 
    </div>
@endif