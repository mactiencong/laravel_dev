@extends('layout.layout')
@section('title', 'Category')
@section('content')
    <ul>
    @foreach ($categories as $category)
        <li>{{ $category->name }}</li>
    @endforeach
    </ul>
@stop