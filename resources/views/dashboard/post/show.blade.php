@extends('dashboard.layout')

@section('content')

    <h1>{{$post->title}}</h1>
    <span>{{$post->posted}}</span>
    <span>{{$post->category->title}}</span>
    <div>{{$post->descrption}}</div>
    <div>{{$post->content}}</div>
    <img src="/uploads/post/{{$post->image}}" style="width:250px" alt="{{$post->image}}">
    {{$post->image}}

    
@endsection