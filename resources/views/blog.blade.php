@extends('layout.layout')
@section('title', 'Blog')
@section('content')
    <ul>
    @foreach ($blogs as $blog)
        <li>{{ $blog->title }} - {{ $blog->category() }}</li>
    @endforeach
    </ul>
@stop