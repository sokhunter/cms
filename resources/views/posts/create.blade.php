@extends('layouts.app')
@section('content')
    <h2>Create</h2>
    <form action="/posts" method="POST">
        <input type="text" name="title" id="">
        <input type="text" name="content" id="">
        <input type="submit" value="Submit">
        @csrf
    </form>
@endsection