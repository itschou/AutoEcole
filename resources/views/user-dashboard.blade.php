@extends('welcome')

@section('content')
<h1>ESPACE CLIENT</h1> <br>

<div class="columns">
    <div class="column is-one-fifth">
        <x-userInformations />
    </div>
    <div class="column">
        @foreach($videos as $video)
        <div>
            <video width="320" height="240" controls>
                <source src="{{ asset('videos/') }}" type="video/mp4" width="20%" alt="ERREUR">
            </video>
            <p>{{ $video->title }}</p>
            <p>❤ {{$video->likesCounter}}</p>
        </div>
        @endforeach
    </div>
</div>

@endsection