@extends('layout.layout')
@section('title', 'Add category')
@section('content')
    <form action="{!! route('categoryAdd') !!}" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <input type="text" name="name" /> {!! $errors->first('name') !!}
        <button type="submit">OK</button>
    </form>
@stop