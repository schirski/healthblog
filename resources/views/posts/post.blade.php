@extends('layouts.app')

@section('content')
    
    <h1>{{$post->title}}</h1>
    <p>
        {!!$post->body!!}
    </p>
    <hr>
    <a href="{{action('PostsController@edit',$post->id)}}" class ="btn btn-outline-primary float-left">Редактировать</a>
    
    <form action="{{action('PostsController@destroy',$post->id)}}" method="POST">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
        <button type="submit" class="btn btn-outline-danger float-right">Удалить</button>
    </form>
    
@endsection