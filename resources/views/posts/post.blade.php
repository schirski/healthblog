@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <p>
        {!!$post->body!!}
    </p>
    <hr>
    <a href="{{action('PostsController@edit',$post->id)}}" class ="btn btn-outline-primary">Редактировать</a>
    
@endsection