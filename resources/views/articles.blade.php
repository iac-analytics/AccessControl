@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @foreach($articles as $article)
                <li><a href="/show/{{$article->id}}">{{$article->title}}</a></li>
            @endforeach
        </ul>
        @can('create') <!-- проверяем права -->
        <a href="/create">Добавить статью</a>
        @endcan
    </div>
@endsection