@extends('layout')

@section('content')
<div class="page">
    <!-- ARTICLE -->
    <h1>{{ $article->name }}</h1>
    {!! $article->content !!}
</div>
@stop