@extends('layouts')

@section('content')
    <form action="{{ action('TodoController@put', ['id' => $todo->id])}}" method="POST">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">\
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <label for="title">Title: </label>
        <input type="text" name="title" class="form-control" value="{{ $todo->title }}">

        <label for="description">Description: </label>
        <input type="text" name="description" class="form-control" value="{{ $todo->description }}">
        
        <input type="submit" value="Submit" class="btn btn-lg btn-success">
    </form>
@endsection