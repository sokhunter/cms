@extends('layouts.app')
@section('content')
    <h2>Create</h2>
    <form action="/posts" method="POST" enctype="multipart/form-data">
        @method("POST")
        <div class="form-group">
            <input type="text" name="title" id="">
        </div>
        @error('title')
            {{$message}}
        @enderror
        <div class="form-group">
            <input type="text" name="content" id="">
        </div>
        <div class="form-group">
            <input type="file" class="form-control-file" name="file">
        </div>
        <input type="submit" value="Submit">
        @csrf
    </form>
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif
@endsection