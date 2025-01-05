@extends('layouts.app')
@section('header', 'Статьи')
@section('content')
    @php
        use Illuminate\Support\Str;
    @endphp
    @if (session('status'))
        <div>
            Важние сообщение :  {{ session('status') }}
        </div>
    @endif
@foreach($articles as $article)
    <div> имя статьи:   <a href="/articles/{{$article->id}}">{{$article->name}}</a> содержимое: {{Str::limit($article->body, 100)}} </div>
@endforeach

@endsection
