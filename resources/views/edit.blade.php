@extends('layouts.app')
@section('header', 'Статьи')
@section('content')
    {{ html()->modelForm($article, 'PATCH', route('articles.update', $article))->open() }}
    @include('layouts.form')
    {{ html()->submit('Обновить')->class('btn btn-primary') }}
    {{ html()->closeModelForm() }}
@endsection
