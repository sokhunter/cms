@extends('layouts.app')
@section('content')
    <ul>
        @foreach ($posts as $post)
        <li> 
            <div class="image-container">
                <img src="{{$post->path}}" alt="{{$post->name}}" height="100">
            </div>
            <a href="{{route('posts.show', $post->id)}}"> {{$post->title}} </a>
            {{$post->created_at->diffForHumans()}}
        </li>
        @endforeach
    </ul>
@endsection