@extends('layouts.main')

@section('title')
    {{$title}}
@endsection
@section('description')
    {{$product->getMetaDescription()}}
@endsection
@section('keywords')
    {{$product->getMetaKeywords()}}
@endsection
@section('image')
    @if(!is_null($product->images()->first()))
        https://erc.hiconix.ru/storage/{{$product->images()->first()->path}}{{$product->images()->first()->name}}.{{$product->images()->first()->extension}}
    @else
        /images/products/no-photo.jpeg
    @endif
@endsection



@section('content')
    <style>
        @media (max-width: 767.98px) {
            .btn-group a.btn {
                font-size: 13px;
                min-height: 24px;
                line-height: 24px;
                padding: 0 12px !important;
            }
        }

    </style>
    <!-- Header -->
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Главная</a></li>
                @foreach($tree as $treeEl)
                    <li class="breadcrumb-item">
                        <a href="{{$treeEl['link']}}">
                            {{$treeEl['title']}}
                        </a>
                    </li>
                @endforeach
                <li class="breadcrumb-item active">{{$product->getFullTitle()}}</li>
            </ol>
        </nav>
    </div>
    <div class="container mb-5">
        <div class="py-3" style="background-color: white;">
            @if (isset($product->getParentTree()[1]))
                <span class="text-muted">{!!array_reverse($product->getParentTree())[1]!!}</span>
            @endif
            <div class="product-name" style="display: flex;">
                <h1 class="fs-5">
                    {{$product->getFullTitle()}}
                    @if (isset($product->squere))
                        @if ($product->getParentCategory() == 2 OR $product->block_type?->id == 3)
                        @else
                            <sup class="text-muted px-2">{{$product->squere}}м²</sup>
                        @endif
                    @endif
                </h1>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col-7" style="display: flex; flex-wrap: wrap;">
                @if ($product->getParentCategory() == 2 OR $product->block_type?->id == 3)
                @else
                    @foreach($product->getSimilarLinks() as $badge)
                        <a class="mb-2 custom-badge <?=$badge['active'] === true ? 'active' : null?> <?=$badge['crossed'] === true ? 'text-decoration-line-through non-active' : null?> " <?= $badge['crossed'] === true ? null : 'href="/products/'.$badge['link']['product'].'"';?>>{!! $badge['text'] !!}</a>
                    @endforeach
                @endif
            </div>
            @if (isset($product->series))
                <div class="col-5">
                    <span>Серия:</span>
                    <span class="series-link"><a href="{{$product->series->link}}">{{$product->series->name}}</a></span>
                </div>
            @endif
        </div>

        <div class="row mt-3">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-lg-8" style="position: relative;">
                        <div class="product-info mb-3">
                            @if ($product->article)
                                <div class="product-article text-muted">
                                    Код: {{$product->article}}
                                </div>
                            @endif
                        </div>


                        <div style="position: absolute; columns: 1;">
                            @if ($badges)
                                @foreach($badges as $badge)
                                    <div style="position: relative; display: block; width: 64px; z-index: 999;"
                                         id="badgeNode" data-text="{{$badge['title']}}">
                                        @if (isset($badge['text_html']))
                                            {!!$badge['text_html']!!}
                                        @endif
                                        <img src="{{$badge['img']}}" style="display: block; z-index: 999;" width="64px"
                                             alt="{{$badge['title']}}" title="{{$badge['title']}}">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        @if ($product->status_new == "0")
                            <div class="img-is-archive"
                                 style="position: absolute; z-index: 9999; top: 15%; left: 32%; opacity: 0.7;">
                                <img src="/images/products/archive.png" width="200">
                            </div>
                        @endif
                        <div class="product-img" style="position: relative;">
                            @if(!is_null($product->images()->first()))
                                <img
                                    src="https://erc.hiconix.ru/storage/{{$product->images()->first()->path}}{{$product->images()->first()->name}}.{{$product->images()->first()->extension}}"
                                    @if(isset($dataSlidesString) && !empty($dataSlidesString))
                                        data-hover-slides="{!!$dataSlidesString!!}"
                                    @endif
                                >
                            @else
                                <img src="/images/products/no-photo.jpeg" width="60%">
                            @endif
                        </div>
                    </div>
                    <div class="d-none d-md-block col-lg-4">
                        <div class="product-properties">
                            <ul class="text-dark" style="font-size: 12px;">
                                <li>
                                    <span class="prop-name">Бренд</span>
                                    <span class="prop-value">{{$product->brand->name}}</span>
                                </li>
                                @if (isset($propsForAnons))
                                    @foreach ($propsForAnons as $prop)
                                        <li>
                                            <span class="prop-name">{{$prop['name']}}</span>
                                            <span class="prop-value">{{$prop['value']}}</span>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="mt-3">
                            <a href="#pinfo" id="scroll-to-props" class="text-muted">ко всем характеристикам </a>
                        </div>
                    </div>
                </div>
                <div id="pinfo" class="mt-5">
                    @if($product->block_type && count($product->sets()) > 0)
                        <div>{{$product->block_type->name}} <span
                                class="color-main fw-bold">{{$product->model}}</span>@if($product->getParentCategory() == 26)
                                нужно
                            @else
                                можно
                            @endif скомплектовать со следующими @if($product->block_type->id === 1)
                                внутренними
                            @endif @if($product->block_type->id === 2)
                                наружними
                            @endif блоками @if ($product->block_type->id === 1)
                                (входят в комплект):
                            @endif</div>

                        <div class="row products mt-3">
                            @foreach ($product->sets() as $set)
                                <div class="col-12 col-sm-12 col-xl-6">
                                    <div class="p-2 mb-3 border product-main"
                                         style="min-height: 400px; position:relative;">
                                        <div class="product-header">
                                            <div class="product-logo">
                                                {{$product->brand}}
                                                <img src="" alt="">
                                            </div>
                                            <div class="product-code mb-3">
                                                Код: {{$set->article}}
                                            </div>
                                        </div>
                                        <div class="text-center" style="min-height: 150px;">
                                            @if (!is_null($set->images()->first()))
                                                <img
                                                    src="https://erc.hiconix.ru/storage/{{$set->images()->first()->path}}{{$set->images()->first()->name}}.{{$set->images()->first()->extension}}"
                                                    style="max-height: 150px; max-width: 150px; max-height: 150px;">
                                            @else
                                                <img src="https://erc.hiconix.ru/images/products/no-photo.jpeg"
                                                     style="max-height: 150px; max-width: 150px; max-height: 150px;">
                                            @endif
                                        </div>
                                        <div class="main-info pt-2">
                                            <div class="group-name" style="font-size: 12px; ">
                                                {{$set->category->product_prefix}}
                                            </div>
                                            <div style="font-size: 15px;">
                                                <a href="/products/{{$set->slug}}"
                                                   class="name">{{$set->brand->name}} {{$set->model}} {{$set->squere}}
                                                    м²</a>
                                            </div>
                                        </div>
                                        <div class="product-price pb-3">
                                            {!! number_format($set->ric_current, 0, " ", " ") !!} руб.
                                        </div>
                                        <div class="product-buttons"
                                             style="font-size: 12px; display: flex; position: relative; justify-content: space-between; width: 100%;">
                                            <div>
                                                <button class="p-2 px-3 p-info">Подробнее</button>
                                            </div>
                                            <div>
                                                <button data-product-id="{{$set->id}}" id="inCartBtn"
                                                        class="p-2 px-4 in-cart active"><span>В корзину</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    @if(count($product->options_in_sets()) > 0)

                        @if ($product->block_type?->id == 3)
                            <div>Данное доп.оборудование <span class="color-main fw-bold">{{$product->model}}</span>
                                нужно скомплектовать со следующими блоками:
                            </div>
                        @else
                            <div>{{$product->block_type->name}} <span
                                    class="color-main fw-bold">{{$product->model}}</span> нужно скомплектовать со
                                следующим доп. оборудованием:
                            </div>
                        @endif

                        <div class="row products mt-3">
                            @foreach ($product->options_in_sets() as $set)
                                <div class="col-12 col-sm-12 col-xl-6">
                                    <div class="p-2 mb-3 border product-main"
                                         style="min-height: 400px; position:relative;">
                                        <div class="product-code mb-3">
                                            Код: {{$set->article}}
                                        </div>
                                        <div class="text-center" style="min-height: 150px;">
                                            @if (!is_null($set->images()->first()))
                                                <img
                                                    src="https://erc.hiconix.ru/storage/{{$set->images()->first()->path}}{{$set->images()->first()->name}}.{{$set->images()->first()->extension}}"
                                                    style="max-height: 150px; max-width: 150px; max-height: 150px;">
                                            @else
                                                <img src="https://erc.hiconix.ru/images/products/no-photo.jpeg"
                                                     style="max-height: 150px; max-width: 150px; max-height: 150px;">
                                            @endif
                                        </div>
                                        <div class="main-info pt-2">
                                            <div class="group-name" style="font-size: 12px;">
                                                {{$set->category->product_prefix}}
                                            </div>
                                            <div style="font-size: 15px;">
                                                <a href="/products/{{$set->slug}}"
                                                   class="name">{{$set->brand->name}} {{$set->model}} {{$set->squere}}
                                                    м²</a>
                                            </div>
                                        </div>
                                        <div class="product-price pb-3">
                                            {!! number_format($set->ric_current, 0, " ", " ") !!} руб.
                                        </div>
                                        <div class="product-buttons"
                                             style="font-size: 12px; display: flex; position: relative; justify-content: space-between; width: 100%;">
                                            <div>
                                                <button class="p-2 px-3 p-info">Подробнее</button>
                                            </div>
                                            <div>
                                                <button data-product-id="{{$set->id}}" id="inCartBtn"
                                                        class="p-2 px-4 in-cart active"><span>В корзину</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    @if(count($product->options_not_in_sets()) > 0)
                        @if($product->block_type?->id === 3)
                            <div>Отдельно можно приобрести к следующим блокам:</div>
                        @else
                            <div>Отдельно можно приобрести:</div>
                        @endif
                        <div class="row products mt-3">
                            @foreach ($product->options_not_in_sets() as $set)
                                <div class="col-12 col-sm-12 col-xl-6">
                                    <div class="p-2 mb-3 border product-main"
                                         style="min-height: 400px; position:relative;">
                                        <div class="product-code mb-3">
                                            Код: {{$set->article}}
                                        </div>
                                        <div class="text-center" style="min-height: 150px;">
                                            @if (!is_null($set->images()->first()))
                                                <img
                                                    src="https://erc.hiconix.ru/storage/{{$set->images()->first()->path}}{{$set->images()->first()->name}}.{{$set->images()->first()->extension}}"
                                                    style="max-height: 150px; max-width: 150px; max-height: 150px;">
                                            @else
                                                <img src="https://erc.hiconix.ru/images/products/no-photo.jpeg"
                                                     style="max-height: 150px; max-width: 150px; max-height: 150px;">
                                            @endif
                                        </div>
                                        <div class="main-info pt-2">
                                            <div class="group-name" style="font-size: 12px; ">
                                                {{$set->category->product_prefix}}
                                            </div>
                                            <div style="font-size: 15px;">
                                                <a href="/products/{{$set->slug}}"
                                                   class="name">{{$set->brand->name}} {{$set->model}} {{$set->squere}}
                                                    м²</a>
                                            </div>
                                        </div>
                                        <div class="product-price pb-3">
                                            {!! number_format($set->ric_current, 0, " ", " ") !!} руб.
                                        </div>
                                        <div class="product-buttons"
                                             style="font-size: 12px; display: flex; position: relative; justify-content: space-between; width: 100%;">
                                            <div>
                                                <button class="p-2 px-3 p-info">Подробнее</button>
                                            </div>
                                            <div>
                                                <button data-product-id="{{$set->id}}" id="inCartBtn"
                                                        class="p-2 px-4 in-cart active"><span>В корзину</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="sticky-top mt-3" style="top: 5rem; background-color:white;">
                    <div class="btn-group" role="group">
                        <a data-block-component="#description" class="btn px-3 border">Описание</a>
                        <a data-block-component="#properties" class="btn px-3 border">Характеристики</a>
                        @if(count($product->docs()->get()) > 0)
                            <a data-block-component="#documentation" class="btn px-3 border">Документация</a>
                        @endif
                        <a data-block-component="#video" class="btn px-3 border">Видео</a>
                    </div>
                </div>
                <div class="product-full-info">
                    <div class=mt-3 id="description">
                        @if (isset($product->model_description) && !empty(trim($product->model_description)))
                            <div>
                                <h2 class="fs-5">Описание модели</h2>
                                <div class="mt-2" style="word-wrap: break-word; white-space: pre-line;">
                                    {!! htmlspecialchars_decode($product->model_description) !!}
                                </div>
                            </div>
                        @endif
                        @if(isset($product->model_features) && !empty(trim($product->model_features)))
                            <div class="mt-3">
                                <h2 class="fs-5">Особенности и преимущества модели</h2>
                                <div class="mt-2" style="word-wrap: break-word; white-space: pre-line;">
                                    {!! htmlspecialchars_decode($product->model_features) !!}
                                </div>
                            </div>
                        @endif
                        @if (isset($product->series) && !empty(trim($product->series->html_description)))
                            <div class="mt-3">
                                <h2 class="fs-5">Описание серии <span
                                        class="color-main">{{$product->series->name}}</span></h2>
                                <div class="mt-2" style="word-wrap: break-word; white-space: pre-line;">
                                    {!! htmlspecialchars_decode($product->series->html_description)!!}
                                    {!! htmlspecialchars_decode($product->series->html_description_other)!!}
                                    {!! htmlspecialchars_decode($product->series->html_features)!!}
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="mt-3 col-8" id="properties">
                        @if ($product->getParentCategory() == 26 && $product->block_type?->id == 2 && count($product->sets()) > 0 && count($product->sets()[0]->properties()) > 0)
                            <h5>{{$product->block_type->name}} <span class="color-main">{{$product->model}}</span>:</h5>
                        @endif
                        @foreach ($product->properties() as $propsGroup)
                            <div class="product-properties mt-3">
                                <h5>{{ $propsGroup['real_properties_group_name'] }}</h5>
                                <ul class="text-dark fs-10">
                                    @foreach ($propsGroup['properties'] as $props)
                                        @if(!empty($props['property_value']))
                                            <li>
                                                <span
                                                    class="prop-name">{{$props['property_name']}}@if(isset($props['property_units']))
                                                        ,
                                                    @endif {{$props['property_units']}}</span>
                                                <span class="prop-value">{{$props['property_value']}}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                        @if ($product->getParentCategory() == 26 && $product->block_type?->id == 2 && count($product->sets()) > 0 && count($product->sets()[0]->properties()) > 0)
                            <h5 class="mt-3">{{$product->sets()[0]->block_type->name}} <span
                                    class="color-main">{{$product->sets()[0]->model}}</span>:</h5>
                            @foreach ($product->sets()[0]->properties() as $propsGroup)
                                <div class="product-properties mt-3">
                                    <h5>{{ $propsGroup['real_properties_group_name'] }}</h5>
                                    <ul class="text-dark fs-10">
                                        @foreach ($propsGroup['properties'] as $props)
                                            @if(!empty($props['property_value']))
                                                <li>
                                                    <span
                                                        class="prop-name">{{$props['property_name']}}@if(isset($props['property_units']))
                                                            ,
                                                        @endif {{$props['property_units']}}</span>
                                                    <span class="prop-value">{{$props['property_value']}}</span>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="mt-3" id="documentation">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Наименование</th>
                                <th scope="col">Размер, дата создания</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($product->docs()->get() as $document)
                                <tr>
                                    <td><i class="fa-solid fa-file"></i> {{$document->original_name}}</td>
                                    <td>{!! round($document->size/1024/1024, 2) !!}
                                        МБ, {!!date('d.m.Y', strtotime($document->updated_at))!!}</td>
                                    <td>
                                        <a href="#" class="btn-download p-2">Скачать</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3" id="video">
                        <div class="row">
                            @foreach($product->videos as $video)
                                <div class="col-6">
                                    <div class="frame">
                                        <iframe width="100%" height="250px" src="{{$video->getURL()}}" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                    </div>
                                    <div class="video-title mt-2" style="font-weight: bold;">
                                        <h5><a href="{{$video->youtube_url}}">{{$video->title}}</a></h5>
                                    </div>
                                    <div class="video-desc mt-2 text-muted">
                                        {{$video->description}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="product-details--price border p-3 sticky-top" style="top: 100px;">
                    <span class="text-muted" style="font-size: 14px;">Цена</span>
                    <div>
                    <span class="text-danger fs-4"
                          @if($product->style === "not_avaible")style="text-decoration: line-through;"@endif>
                        @if ($product->getParentCategory() == 26 && count($product->sets()) > 0 && $product->block_type->id == 2)
                            {!! number_format($product->ric_current + $product->sets()[0]->ric_current, 0, " ", " ") !!}
                            руб</span>
                        @elseif ($product->getParentCategory() == 117 && count($product->sets()) > 0 && count($product->options_in_sets()) > 0 && $product->block_type->id == 2)
                            {!! number_format($product->ric_current + $product->sets()[0]->ric_current + $product->options_in_sets()[0]->ric_current, 0, " ", " ") !!}
                            руб</span>
                        @elseif ($product->brand->id === 2071 || ($product->brand->id === 2070 && $product->status == 'on_order2'))
                            <span class="text-muted">по запросу</span>
                        @else
                            {!! number_format($product->ric_current, 0, " ", " ") !!} руб
                        @endif
                    </div>
                    @if ($product->getParentCategory() == 26 && count($product->sets()) > 0 && $product->block_type->id == 2)
                        <div class="text-muted" style="font-size: 14px;">
                            <span>Цена включает:</span>
                            <ul class="list-unstyled">
                                <li>код: {{$product->article}} <span
                                        class="fw-bold">{{$product->block_type->name}} {{$product->model}}</span></li>
                                <li>код: {{$product->sets()[0]->article}} <span
                                        class="fw-bold">{{$product->sets()[0]->block_type->name}} {{$product->sets()[0]->model}}</span>
                                </li>
                            </ul>
                        </div>
                    @elseif ($product->getParentCategory() == 117 && count($product->sets()) > 0 && count($product->options_in_sets()) > 0 && $product->block_type->id == 2)
                        <div class="text-muted" style="font-size: 14px;">
                            <span>Цена включает:</span>
                            <ul class="list-unstyled">
                                <li>код: {{$product->article}} <span
                                        class="fw-bold">{{$product->block_type->name}} {{$product->model}}</span></li>
                                <li>код: {{$product->sets()[0]->article}} <span
                                        class="fw-bold">{{$product->sets()[0]->block_type->name}} {{$product->sets()[0]->model}}</span>
                                </li>
                                <li>код: {{$product->options_in_sets()[0]->article}} <span
                                        class="fw-bold">{{$product->options_in_sets()[0]->category->product_prefix}} {{$product->options_in_sets()[0]->model}}</span>
                                </li>
                            </ul>
                        </div>
                    @endif
                    <div>
                        @foreach ($product->getStatusHTML() as $status)
                            {!!$status['html']!!}
                            @if($status['withStock'] == true)
                                {!!$product->getStockHTML()!!}
                            @endif
                        @endforeach
                        @if ($product->getParentCategory() == 26 && $product->block_type?->id == 2 && count($product->sets()) > 0)
                            <span class="text-muted" style="font-size: 16px;"><i
                                    class="fa-solid fa-circle-info text-danger"></i> Блоки продаются только в комплекте</span>
                        @endif
                    </div>
                    <div class="text-center mt-3">
                        @if ($product->status_new == 0)
                            <button class="in-cart disabled px-5 py-2" disabled
                                    style="cursor: not-allowed; background-color: gray; color: white; border: gray;">В
                                корзину
                            </button>
                        @else
                            <button
                                data-product-id="{{$product->id}}@if ($product->getParentCategory() == 26 && $product->block_type?->id == 2 && count($product->sets()) > 0),{{$product->sets()[0]->id}}@endif @if ($product->getParentCategory() == 117 && count($product->sets()) > 0 && count($product->options_in_sets()) > 0 && $product->block_type->id == 2),{{$product->sets()[0]->id}},{{$product->options_in_sets()[0]->id}}@endif"
                                id="inCartBtn" class="in-cart active px-5 py-2"><span>В корзину</span></button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="localStorageData" value="{{json_encode($forLocalStorage)}}">
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', () => {
            const btnGroups = document.querySelectorAll('.btn-group a');
            const scrollToProps = document.querySelector('#scroll-to-props');

            const localStorageData = JSON.parse(document.querySelector('#localStorageData').value);

            const allBadgesNode = document.querySelectorAll('#badgeNode');

            let msgHelper;

            allBadgesNode.forEach(badgeNode => {

                badgeNode.onmouseover = (e) => {
                    let target = e.target;

                    msgHelper = document.createElement('div');
                    msgHelper.className = 'msg-helper';
                    msgHelper.innerHTML = target.parentElement.dataset.text;

                    document.body.append(msgHelper);

                    let coords = target.getBoundingClientRect();

                    let left = coords.left + (target.offsetWidth - msgHelper.offsetWidth) / 2;
                    if (left < 0) left = 0;

                    let top = coords.top - msgHelper.offsetHeight - 5;
                    if (top < 0) {
                        top = coords.top + target.offsetHeight + 5;
                    }

                    msgHelper.style.left = left + 'px';
                    msgHelper.style.top = top + 'px';
                }

                badgeNode.onmouseout = function (e) {

                    if (msgHelper) {
                        msgHelper.remove();
                        msgHelper = null;
                    }

                };
            });


            const showBlock = (block) => {
                document.querySelector('#' + block).style.display = 'block';
                document.querySelector(`a[data-block-component="#${block}"]`).classList.add('active');
            }

            const getElByDataAttr = (node) => {
                return document.querySelector(node.dataset.blockComponent);
            }

            const clearAndHide = () => {
                btnGroups.forEach(node => {
                    node.classList.remove('active');
                    getElByDataAttr(node).style.display = 'none';
                });
            }

            btnGroups.forEach(node => {
                node.onclick = (event) => {
                    clearAndHide(node);
                    event.target.classList.add('active');
                    getElByDataAttr(node).style.display = "block";
                }
            });

            scrollToProps.onclick = () => {
                clearAndHide();
                showBlock('properties');
                const newUrl = document.location.href.split("#")[0] + "#pinfo";
                document.location.href = newUrl;
                console.log(document.location.href);
            }

            clearAndHide();
            showBlock('description');
            hoverSlider.init({});
            hoverSlider.prepareMarkup();
        });
    </script>
    <script src="/public/js/hover-slider.min.js"></script>
@endsection
