@extends('layouts.app')

@section('content')
    
    @if(count($posts) > 0)
    <h1>Записи</h1>
        <div class="list-group list-group-flush">
            @foreach($posts as $post)                
                    <a class="list-group-item  list-group-item-action" href="posts/{{$post->id}}">
                        {{$post->title}}            
                    </a>                                    
            @endforeach
        </div>
    @endif

@endsection

@section('nav_posts_active', 'active')
    
