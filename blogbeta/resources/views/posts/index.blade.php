@extends('layout.app')

@section('content')


    <p class="text-center">TAGS</p>
    @foreach ($tags as $tag)
        @foreach ($tag->posts as $item)
            <p>{{ $tag->name }} : {{ $item->body }}</p>
        @endforeach
        
    @endforeach

    <p class="text-center">Post title and body + post profile + tags</p>
    @foreach ($posts as $item)
        <ul class="p-3">
            <li>{{ $item->title }} : {{ $item->body }}</li>
            <li>{{ $item->profile }}</li>
            @foreach ($item->tags as $x)
                <li>{{ $x->name }}</li>
            @endforeach
            
        </ul>
    @endforeach

    

    <p class="text-center">Users </p>

    @foreach ($users as $item2)
        <div class="bg-blue-500">
        
            <ul>

                @if (isset($item2->profile->website_url))
                    <li>Website URL<h1>{{ $item2->profile->website_url }}</h1></li>
                @endif

                @if (isset($item2->xp->points))
                    <li><h2>POINTS:{{ $item2->xp->points }}</h2></li>
                @endif

                @foreach ($item2->posts as $i)
                
                    <li><h3>POST->body{{ $i->body }}</h3></li>
               
                @endforeach

               
            </ul>
        </div>
    @endforeach

    <p class="text-center">Videos Series </p>

    @foreach ($video as $item)

        <ul>
            <li>video {{ $item->title }} belongs to serie {{  $item->series->title }}</li>
            {{-- <li>video {{ $item->title }} belongs to serie {{  $item->watchable->id }}</li> --}}
        </ul>
        
    @endforeach

 


@endsection