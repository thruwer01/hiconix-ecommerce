@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/series/">Серии</a></li>
            <li class="breadcrumb-item active">{{$title}}</li>
        </ol>
    </nav>
</div>
<div class="container mt-2">
    <h1>{{$h1}}</h1>
    <p class="text-muted" id="seriesDesc">
        {!! htmlspecialchars_decode(str_replace('_x000D_', '', $html)) !!}
        {!! htmlspecialchars_decode($series->html_description_other) !!}
        {!! htmlspecialchars_decode($series->html_features) !!}
    </p>
    <div class="row col-12 mt-5">
        @foreach ($products as $product)
            <div class="col-md-6">
                <div class="p-4 mb-3 border row">				
                    <div class="col-lg-6 col-md-6">
                        <div class="product-code mb-3 text-muted">
                            Код: {{$product->article}}
                        </div>
                        @if ($product->status_new == "0")
                        <div class="img-is-archive" style="position: absolute; z-index: 99999; top: 15%; left: 3%; opacity: 0.7;">
                            <img src="/images/products/archive.png" width="200">
                        </div>
                        @endif
                        <div class="product-img">
						<a href="/products/{{$product->slug}}">
                            @if(!is_null($product->images()->first()))
                            <img src="https://erc.hiconix.ru/storage/{{$product->images()->first()->path}}{{$product->images()->first()->name}}.{{$product->images()->first()->extension}}" style="max-width: 60%; max-height: 180px;" height="auto">
                            @else
                            <img src="/images/products/no-photo.jpeg" width="60%">
                            @endif
						</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                    @if (isset($product->getParentTree()[1]))
                        <div style="font-size: 12px; " class="text-muted">{!!array_reverse($product->getParentTree())[1]!!}</div>
                    @endif
                        <a href="/products/{{$product->slug}}">{{$product->getFullTitle()}}</a>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="product-properties">
                            <ul class="text-dark" style="font-size: 12px;">
                                <li>
                                    <span class="prop-name">Бренд</span>
                                    <span class="prop-value">{{$product->brand->name}}</span>
                                </li>
                                @if (isset($product->squere))
                                <li>
                                    <span class="prop-name">Площадь, м²</span>
                                    <span class="prop-value">{{$product->squere}}</span>
                                </li>
                                @endif
                                @if (isset($product->properties()['montazhnyie_kharaktieristiki']['properties'][3]['property_value']))
                                <li>
                                    <span class="prop-name">Перепад высот, м</span>
                                    <span class="prop-value">{{$product->properties()['montazhnyie_kharaktieristiki']['properties'][3]['property_value']}}</span>
                                </li>
                                @endif
                                {{-- <li>
                                    <span class="prop-name">Тип компрессора</span>
                                    <span class="prop-value">Инвертор</span>
                                </li> --}}
                                {{-- <li>
                                    <span class="prop-name">Охлаждение, кВт</span>
                                    <span class="prop-value">2,2</span>
                                </li> --}}
                                @if (isset($product->properties()['osnovnye_harakteristiki']['properties'][2]['property_value']))
                                <li>
                                    <span class="prop-name">Максимальный уровень шума, дБа</span>
                                    <span class="prop-value">{{$product->properties()['osnovnye_harakteristiki']['properties'][2]['property_value']}}</span>
                                </li>
                                @endif
                                @if (isset($product->properties()['montazhnyie_kharaktieristiki']['properties'][1]['property_value']))
                                <li>
                                    <span class="prop-name">Кол-во внутренних блоков</span>
                                    <span class="prop-value">{{$product->properties()['montazhnyie_kharaktieristiki']['properties'][1]['property_value']}}</span>
                                </li>
                                @endif
                                @if (isset($product->properties()['montazhnyie_kharaktieristiki']['properties'][0]['property_value']))
                                <li>
                                    <span class="prop-name">Кол-во комнат</span>
                                    <span class="prop-value">{{$product->properties()['montazhnyie_kharaktieristiki']['properties'][0]['property_value']}}</span>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 products pl-3 pr-3">
                        <div class="product-price pt-3 pt-lg-1 pt-xl-1 pb-1">
                            {!! number_format($product->ric_current, 0, " ", " ") !!} руб.
                        </div>
                        <div class="my-3">
                            @foreach ($product->getStatusHTML() as $status)
                                {!!$status['html']!!}
                                @if($status['withStock'] == true)
                                    {!!$product->getStockHTML()!!}
                                @endif
                            @endforeach
                        </div>
                        <div class="product-buttons" style="font-size: 14px;">
						<!--
                            <button class="p-2 px-4 p-info w-100 mb-2" onclick="location.href='/products/{{$product->slug}}'">Подробнее</button>
						-->	
                            @if ($product->status_new == 0)
                                <button class="in-cart disabled px-5 py-2 w-100" disabled style="cursor: not-allowed; background-color: gray; color: white; border: gray;">В корзину</button>
                            @else
                                <button data-product-id="{{$product->id}}@if ($product->getParentCategory() == 26 && $product->block_type?->id == 2 && count($product->sets()) > 0),{{$product->sets()[0]->id}}@endif @if ($product->getParentCategory() == 117 && count($product->sets()) > 0 && count($product->options_in_sets()) > 0 && $product->block_type->id == 2),{{$product->sets()[0]->id}},{{$product->options_in_sets()[0]->id}}@endif"
                                    id="inCartBtn" class="in-cart active px-5 py-2 w-100"><span>В корзину</span></button>
                            @endif
                        </div>
                    </div>					

                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection()