@extends('layouts.app')

@section('content')
    
    <h1>Редактирование записи</h1>
    
    <form action="{{action('PostsController@update',$post->id)}}" method="Post">
        @csrf
        <input name="_method" type="hidden" value="PUT">
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" class="form-control" name="title" value="{{$post->title}}">            
        </div>
        <div class="form-group">
            <label for="body">Текст</label>            
            <textarea class="form-control" name="body"  cols="30" rows="10">{{$post->body}}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
    
@endsection