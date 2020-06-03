@extends('layouts.app')
@section('content')
    <h2>Edit</h2>
    <form action="/posts/{{$post->id}}" method="POST">
        <input type="text" name="title" id="" value="{{$post->title}}">
        <input type="text" name="content" id="" value="{{$post->content}}">
        <input type="hidden" name="_method" value="PUT">
        <input type="submit" value="Update">
        @csrf
    </form>
    <form action="/posts/{{$post->id}}" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Delete">
        @csrf
    </form>
@endsection