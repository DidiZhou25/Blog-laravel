@extends('layouts.app')

@section('content')
    <h1>Post</h1>
    @if (count($articles) > 0)
        @foreach ($articles as $article)
            <div class="card">
                <div class="card-body">
                <h3><a href="/posts/{{$article->id}}">{{$article->title}}</a></h3>
                    <p>{{$article->body}}</p>
                </div>
            </div>
        @endforeach
    @endif
@endsection
