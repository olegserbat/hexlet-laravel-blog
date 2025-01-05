@extends('layouts.app')
@section('content')
    <div>
        <a href="/articles/{{$article->id}}/edit"> Редактирование статьи {{$article->name}}</a>
    </div>
    <div>
        <a data-confirm="Вы уверены?" data-method="delete" href="{{ route('articles.destroy', $article) }}" rel="nofollow">
            Удаление статьи</a>
    </div>
    <div>
        <form action="/articles/{{$article->id}}" method="get">
            <input type="hidden" name="_METHOD" value="DELETE">
            <input type="submit" value="Удаление статьи вторым методом">
        </form>
    </div>
    <div>
        <a class="link-danger" href="{{ route('articles.destroy', $article) }}" data-method="delete" rel="nofollow"
           data-confirm="Are you sure?">Delete method 3</a>
    </div>

    <h3>{{$article->name}}</h3>
    <p>{{$article->body}}</p>
@endsection
