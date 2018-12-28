@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <p>
        {!!$post->body!!}
    </p>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class ="btn btn-outline-primary">Редактировать</a>
@endsection