@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/contacts">Контакты</a></li>
            <li class="breadcrumb-item active" aria-current="page">Партнёры</li>
        </ol>
    </nav>
</div>
<div class="container">
    <div class="row contacts-content main-col">
        <div class="col-12">
            <div class="page-title">
                <div class="row">
                    <div class="col-12">
                        <h1>Наши партнёры</h1>
                    </div>
                </div>
            </div>

            <div class="contacts-top d-none d-lg-block">
                <div class="contacts-top-tabs">
                    <a href="/contacts/">Контакты Хиконикс</a>
                    <a class="active" href="/partners/">Наши партнёры</a>
                </div>
                <a href="/partner/" class="contacts-top-partners">Стать партнёром</a>
            </div>
            <div class="px-4 py-5 my-5 text-center">
                <h2 class="fw-bold text-muted">В разработке</h2>
            </div>
        </div>
    </div>
</div>
@endsection