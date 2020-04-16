@extends('layout')

@section('content')
<div class="page">
    <!-- ARTICLE -->
    <h1>{{ $article->name }}</h1>
    {!! $article->content !!}
    <hr>
    <h2>{{ _('Hardcoded texts in template') }}</h2>
    <p>{{ _('This is my first static text') }}</p>
    <p>{{ _('Second static text') }}</p>
    <p>{{ _('Third static text') }}</p>
</div>
@stop