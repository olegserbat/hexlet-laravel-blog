@extends('layouts.app')
@section('header', 'Статьи')
@section('content')
    {{ html()->modelForm($article, 'POST', route('articles.store'))->open() }}
    @include('layouts.form')
    {{ html()->submit('Создать') }}
    {{ html()->closeModelForm() }}
@endsection
