@extends('layouts.app')

@section('content')
    
    <h1>Новая запись</h1>
    
    <form action="{{action('PostsController@store')}}" method="Post">
        @csrf
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" class="form-control" name="title" aria-describedby="emailHelp">            
        </div>
        <div class="form-group">
            <label for="body">Текст</label>            
            <textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>

@endsection

@section('nav_createpost_active', 'active')