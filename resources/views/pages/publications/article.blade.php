@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/publications">Публикации</a></li>
            <li class="breadcrumb-item"><a href="/publications/{{$group}}">{{$groupNameRu}}</a></li>
            <li class="breadcrumb-item active">
                {{$title}}
            </li>
        </ol>
    </nav>
</div>
<div class="container article-content">
    @if (isset($date))
        <div class="article-date">
            {{date('d.m.Y',strtotime($date))}}
        </div>
    @endif
    <img class="article-banner-img" src="{{$banner_img}}">
    {!! $content !!}
</div>
@endsection