@extends('layouts.app')
@section('title', 'O блоге')
@section('header', 'О Блоге')
@section('content')
    <p>Эксперименты с Laravel на Хекслете</p>

@foreach($param as $item=>$key)
    <p>This is value:  {{$item}} for key: {{$key}}</p>

@endforeach
    @php
    $article1 = new \App\Models\Article();
    @endphp
    {{  html()->modelForm($article1, 'GET', route('articles.index'))->open() }}
    {{  html()->input('text', 'name') }}
    {{  html()->submit('Search') }}
    {{ html()->closeModelForm() }}
@endsection

