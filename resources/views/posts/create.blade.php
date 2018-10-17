@extends('layouts.app')

@section('content')
    <h1>Create</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => "POST"]) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', 'Title',['class' => 'form-control'])}}
    </div>
    {!! Form::close() !!}
@endsection
