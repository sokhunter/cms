@extends('layouts.app')
@section('content')
    <h2>Edit</h2>
    <form action="/posts/{{$post->id}}" method="POST">
        <input type="text" name="title" id="" value="{{$post->title}}">
        <input type="text" name="content" id="" value="{{$post->content}}">
        <input type="submit" value="Update">
        @method("PUT")
        @csrf
    </form>
    <form action="/posts/{{$post->id}}" method="POST">
        @method("DELETE")
        @csrf
    </form>
@endsection