@extends('layouts.app')
@section('content')     

        <welcome-component :title="'{{$title}}'"> </welcome-component> 
        
        <p>{{$description}}</p>

        @{{ product }}
@endsection  
@section('nav_main_active', 'active')