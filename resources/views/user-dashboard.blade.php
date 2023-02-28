@extends('welcome')

@section('content')


<div class="columns is-flex is-centered is-vcentered has-text-centered is-multiline m-auto">
    <div class="column is-2">
        <x-userInformations />
    </div>

    <span id="messageAlert">@include('components/messages')</span>
    <div class="column is-full is-10">
        <div class="columns">


            @foreach($videos as $video)

            <div class="video-container relative rounded-lg overflow-hidden column is-10" style="max-width: 700px;">
                <video src="{{ asset('videos/' . $video->path) }}" class="w-full h-auto" controls></video>
                <h2 class="text-2xl font-bold mb-2 has-text-centered">{{ $video->title }}</h2>
                <div class="p-2 columns has-text-centered">
                    <div class="column">

                        <form action="{{ route('videos.like', $video) }}" method="POST">
                            @csrf
                            <button type="submit">💗</button>
                        </form>
                    </div>
                    <div class="column">
                        <strong>{{$video->likesCounter}} LIKE(S)</strong>
                    </div>
                </div>
            </div><br>
            @endforeach
        </div>


    </div>

</div>

<script>
    // Afficher le message
    document.getElementById("messageAlert").style.display = "block";

    // Cacher le message après 3 secondes
    setTimeout(function() {
        document.getElementById("messageAlert").style.opacity = "0";
    }, 3000);

    // Supprimer le message après la fin de l'animation de fondu
    setTimeout(function() {
        document.getElementById("messageAlert").remove();
    }, 3500);
</script>

@endsection