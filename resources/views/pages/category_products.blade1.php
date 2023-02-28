@extends('layouts.main')

@section('title'){{$metaTitle}}@endsection
@section('description'){{$metaDescription}}@endsection
@section('keywords'){{$metaKeys}}@endsection
@section('head')

<style>
.section_top_desc {
}

.section_top_desc.section_top_desc_hidden {
  overflow: hidden;
  position: relative;
  max-height: 100px;
}

.section_top_desc_hidden_button {
    display: block;
    position: absolute;
    bottom: 0px;
    height: 40px;
    width: 100%;
    background: linear-gradient(to top, #fff 50%, #d9d9d9 50%, #d9d9d9 56%, #fff 51%, #ffffff80 100%);
    transition: 1s;
}

.section_top_desc.section_top_desc_hidden.section_top_desc_hidden_button_open {
   max-height: 100%;
}

.desc_hidden_button {
    position: absolute;
    width: 40px;
    height: 40px;
    bottom: 0px;
    left: 50%;
    border-radius: 30px;
    background: #fff;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
    cursor: pointer;
    -webkit-align-items: center;
            align-items: center;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
            justify-content: center;
}

.desc_hidden_button:before {
  position: absolute;
  content:'';
  width: 15px;
  height: 15px;
  -webkit-transform: rotate(225deg);
          transform: rotate(225deg);
  border-left: 3px solid #12aaed;
  border-top: 3px solid #12aaed;
  transition: 0.3s;
}

.desc_hidden_button.desc_hidden_button_rotate_up:before {
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}

@media (max-width:767.98px) {
#fixfilter {
	position: fixed;
	z-index: 9999999;
	background: #FFF;
	top: 0;
	height: 100vh;
	overflow: hidden;
	left: -320px;
	width: 300px;
	padding: 40px 10px 10px; 
	box-shadow: 10px 0 20px rgba(0,0,0,0.4);
	transition: 0.3s;
	transform: translate3d(0,0,0);
}
#fixfilter.vis {
	left: 0;
}

#fixfilter-close {
	position: absolute;
	top: 10px;
	right: 20px;
	text-transform: uppercase; 
	transition: 0.3s;
	cursor: pointer;
	font-size: 20px;
	color: #12aaed;
}
#fixfilter-close:hover {
	color: #000;
}
#fixfilter-bg {
	position: fixed;
	z-index: 9999998;
	background: rgba(0,0,0,0.5);
	top: 0;
	left: -100vw;
	width: 100%;
	height: 100%;
	overflow: hidden;
	opacity: 0;
	transition: 0.2s;
	visibility: hidden;
}
#fixfilter-bg.vis {
	opacity: 1;
	transition: 0.3s;
	visibility: visible;
	left: 0;
}
#filtersBlock {
	overflow-y: auto;
	height: 90vh;
	overflow-x: hidden;
}
}
#fixfilterOpenBtn {
	position: fixed;
	top: 100px;
	right: 20px;
	background: #12aaed;
	color: #FFF;
	padding: 4px 14px;
	border-radius: 8px;
	z-index: 99999;
	cursor: pointer;
	box-shadow: 0 4px 12px rgba(0,0,0,0.2), 0 12px 16px rgba(0,0,0,0.1);
} 
#fixfilterOpenBtn i {
	padding-right: 8px;
} 
.catalog-main {
	overflow-x: hidden;
}
.tagcloud {
	float: left;
	display: block;
	margin-bottom: 4px;
	margin-right: 4px;
	padding: 5px 10px;
	font-size: 12px !important;
	line-height: 1.4em !important;
	color: #FFF !important;
	text-decoration: none;
	letter-spacing: 1px;
	background: #12aaed;
	transition: all .4s linear;
}
.tagcloud:hover {
  background: #BFE2FF !important;
  color: #000 !important;
  text-decoration: none;
  transition: all .01s linear;
}
.product-anons-img {
	margin-bottom: 20px;
	position: relative;
}
.product-anons-img a {
	display: block;
}
.hover-slider-indicator {
	bottom: -20px;
}

#marketingBadges {
	display: flex;
	align-items: center;
    justify-content: center;
	position: static!important;
	margin-bottom: 8px;
}
#marketingBadges div {
	width: calc(25% - 4px)!important;
	margin: 0 4px!important;
	z-index: 2!important;
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>
@endsection
@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            @foreach($tree as $treeEl)
            <li class="breadcrumb-item @if($treeEl['active'] === false) active @endif">
                @if ($treeEl['active'] === true)
                <a href="{{$treeEl['link']}}">
                    {{$treeEl['title']}}
                </a>
                @else 
                    {{$treeEl['title']}}
                @endif 
            </li>
            @endforeach
        </ol>
    </nav>
</div>
<div class="container mt-2 mb-5">
    <h1>{{$h1}}</h1>
    <div class="row mt-4">
		<div id="fixfilterOpenBtn" class="d-block d-md-none"><i class="fas fa-filter"></i>Фильтр</div>
		<div id="fixfilter-bg"></div>
        <div id="fixfilter" class="fixfilter col-12 col-md-4 col-lg-3 sticky-cat-top">
            <div style="position: relative;">
                <div id="filtersBlock" class="bg-white">
                    <div>
                        @if (!is_null($getDotCategories))
                        <div class="filter-group">
                            <div class="filter-block">
                                <div class="filter-block--header">
                                    <h5 class="p-2">
                                        Тип системы
                                    </h5>
                                </div>
                                <div class="filter-block--values mb-2" id="filter-system-type">
                                        @foreach ($getDotCategories as $cat)
                                            <div class="p-1 mb-1" style="display: flex; vertical-align: middle; line-height: 16px;">
                                                <input type="radio" class="mt-1 mr-2" name="type" @if ($categoryID == $cat->id) checked @endif value="{{$cat->id}}">
                                                <label><a href="{{$cat->link}}">{{$cat->title}}</a></label>
                                            </div>
                                        @endforeach
                                        <div class="p-1 mb-1" style="display: flex; vertical-align: middle; line-height: 16px;">
                                            <input type="radio" class="mt-1 mr-2" value="all" name="type" checked>
                                            <label>любая</label>
                                        </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="filter-group mb-2">
                            <div class="filter-block">
                                <div class="filter-block--header">
                                    <h5 class="p-2">
                                        Площадь
                                    </h5>
                                </div>
                                <div class="filter-block--values" id="filter-squere">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="filter-group mb-2">
                            <div class="filter-block">
                                <div class="filter-block--header">
                                    <h5 class="p-2">
                                        Тип внутреннего блока
                                    </h5>
                                </div>
                                <div class="filter-block--values" id="filter-inner-block">
                                </div>
                            </div>
                        </div> --}}
                        <div class="filter-group">
                            <div class="filter-block">
                                <div class="filter-block--header">
                                    <h5 class="p-2">
                                        Бренд
                                    </h5>
                                </div>
                                <div class="filter-block--values" id="filter-brands">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="filter-group mb-2">
                            <div class="filter-block">
                                <div class="filter-block--header">
                                    <h5 class="p-2">
                                        Цена розничная
                                    </h5>
                                </div>
                                <div class="filter-block--values" id="filter-price">
                                    <div class="row text-center mx-2 align-middle">
                                        <div class="col-5">
                                            <input type="number" id="min" class="form-control">
                                        </div>
                                        <div class="col-2"></div>
                                        <div class="col-5">
                                            <input type="number" id="max" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mt-2 row">
                                        <div class="col-1"></div>
                                        <div class="col-10">
                                            <input id="range_ric_price">
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="filter-group">
                            <div class="filter-block">
                                <div class="filter-block--header">
                                    <h5 class="p-2">
                                        Склад товара
                                    </h5>
                                </div>
                                <div class="filter-block--values" id="filter-stock">
                                </div>
                            </div>
                        </div>
						<!-- Akcii-block-v-razrabotke (Daniil)-->
						<!--
                        <div class="filter-group">
                            <div class="filter-block">
                                <div class="filter-block--header">
                                    <h5 class="p-2">
                                        Акция (блок в разработке)
                                    </h5>
                                </div>
                                <div class="filter-block--values" id="filter-actions">
                                    
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
			<span class="d-block d-md-none" id="fixfilter-close"><i class="fas fa-times"></i></span>
        </div>
        <div class="pl-md-2 col-12 col-md-8 col-lg-9 catalog-main ">

			<div id="categoryD" class="pl-md-2 pr-md-2 section_top_desc section_top_desc_hidden">
			<div id="categoryDescHeader">
			{!! $htmlDescriptionHeader !!}
			</div>
			@if ($htmlDescriptionHeader)
			<div id="showFullDesc" class="section_top_desc_hidden_button">
					<div class="desc_hidden_button"></div>
			</div>
			@endif
			</div>



          <div id="hitpr">
	<div class="d-none d-md-block catalogSwiper-container">
		<div class="swiper catalogSwiper">
				<h2>Хит продаж</h2>
                 <div class="products mt-3 swiper-wrapper" id="topSellers">
    
                  </div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>
	</div>
            <!-- Блок уточнить 
            <div class="sticky-top bg-white" style="top: 80px; z-index: 99999;">
			-->
			
                @if (count($clarify) > 0)
                <div class="">
                    <div class="row p-0 m-0 border">
                        <div class="col-12 col-sm-1 py-2">Уточнить:</div>
                        <div class="col-12 col-sm-1"></div>
                        
                        <div class="col-12 col-sm-10 p-2" style="display: flex; line-height: 30px;">
                            <div>
                                @foreach($clarify as $ctg)
                                    <a href="{{$ctg['link']}}" class="tagcloud">{{$ctg['name']}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <!-- Всего товаров -->
                <div class="mt-3">
                    <div class="row p-0 m-0 border">
                        <div class="col-4 d-none d-md-block">
                            Всего показано товаров: <span id="totalProducts">0</span>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="text-end">
                                <span>Сортировать:</span>
                                <a href="#" id="orderBy" data-order-by="rating">по рейтингу</a>
                                <a href="#" id="orderBy" data-order-by="ric_current" style="color: gray;">по цене</a>
                                <a href="#" id="orderBy" data-order-by="badges_count" style="color: gray;">по акции</a>
                            </div>
                        </div>
                    </div>
                </div>
       
            <!-- Товары -->
			
            <div class="mt-3">
			<div style="">
                <div class="row products mt-3" id="productsList">
                    @for ($i = 0; $i < 50; $i++)
                    <div class="col-xl-4 col-lg-6 col-12" id="skeleton">
                        <div class="mb-3 border" style="min-height: 550px; position:relative;">
                            <svg
                                role="img"
                                width="550"
                                height="550"
                                aria-labelledby="loading-aria"
                                viewBox="0 0 550 550"
                                preserveAspectRatio="none"
                                >
                                <title id="loading-aria">Loading...</title>
                                <rect
                                    x="0"
                                    y="0"
                                    width="100%"
                                    height="100%"
                                    clip-path="url(#clip-path)"
                                    style='fill: url("#fill");'
                                ></rect>
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect x="0" y="0" rx="0" ry="0" width="1" height="1" /> 
                                        <rect x="141" y="455" rx="4" ry="4" width="114" height="33" /> 
                                        <rect x="25" y="420" rx="4" ry="4" width="100" height="20" /> 
                                        <rect x="29" y="263" rx="4" ry="4" width="208" height="31" /> 
                                        <rect x="29" y="299" rx="4" ry="4" width="208" height="31" /> 
                                        <rect x="29" y="241" rx="4" ry="4" width="226" height="17" /> 
                                        <rect x="29" y="222" rx="4" ry="4" width="226" height="17" /> 
                                        <rect x="29" y="194" rx="4" ry="4" width="226" height="17" /> 
                                        <rect x="29" y="177" rx="4" ry="4" width="149" height="12" /> 
                                        <circle cx="138" cy="114" r="55" /> 
                                        <rect x="29" y="32" rx="4" ry="4" width="100" height="13" /> 
                                        <rect x="20" y="454" rx="4" ry="4" width="114" height="33" />
                                    </clipPath>
                                    <linearGradient id="fill">
                                    <stop
                                        offset="0.599964"
                                        stop-color="#f3f3f3"
                                        stop-opacity="1"
                                    >
                                        <animate
                                        attributeName="offset"
                                        values="-2; -2; 1"
                                        keyTimes="0; 0.25; 1"
                                        dur="2s"
                                        repeatCount="indefinite"
                                        ></animate>
                                    </stop>
                                    <stop
                                        offset="1.59996"
                                        stop-color="#ecebeb"
                                        stop-opacity="1"
                                    >
                                        <animate
                                        attributeName="offset"
                                        values="-1; -1; 2"
                                        keyTimes="0; 0.25; 1"
                                        dur="2s"
                                        repeatCount="indefinite"
                                        ></animate>
                                    </stop>
                                    <stop
                                        offset="2.59996"
                                        stop-color="#f3f3f3"
                                        stop-opacity="1"
                                    >
                                        <animate
                                        attributeName="offset"
                                        values="0; 0; 3"
                                        keyTimes="0; 0.25; 1"
                                        dur="2s"
                                        repeatCount="indefinite"
                                        ></animate>
                                    </stop>
                                    </linearGradient>
                                </defs>
                                </svg>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
			</div>
            <!-- Блок смотреть еще -->
            @if(count($lookMore) > 0)
            <div class="">
                <div class="row p-0 m-0 border">
                    <div class="col-sm-2 py-2">Смотреть еще:</div>
                    <div class="col-sm-8 p-2" style="display: flex; flex-wrap: wrap; line-height: 30px;">
                        <div>
                            @foreach($lookMore as $ctg)
                                <a href="{{$ctg['link']}}" class="tagcloud">{{$ctg['name']}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="">
                {!! $htmlDescriptionFooter !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer-scripts')
<input type="hidden" id="category_id" value="{{$categoryID}}">
<input type="hidden" id="parent_category_id" value="{{$parentCategory}}">
<script type="text/javascript">
window.addEventListener('load', () => {
			const fixfilterOpenBtn = document.getElementById('fixfilterOpenBtn');
			const fixfilter = document.getElementById('fixfilter');
			const fixfilterbg = document.getElementById('fixfilter-bg');
			fixfilterOpenBtn.addEventListener("click", function(){
				fixfilter.classList.add("vis");
				fixfilterbg.classList.add("vis");	
			});	
			document.getElementById("fixfilter-close").addEventListener("click", function(){
				fixfilter.classList.remove("vis");	
				fixfilterbg.classList.remove("vis");	
			});
			fixfilterbg.addEventListener("click", function(){
				fixfilter.classList.remove("vis");	
				fixfilterbg.classList.remove("vis");	
			});	
	
	
	
    let categoryID = document.querySelector('input#category_id').value;
    const productsList = document.querySelector('div#productsList');
    const totalProducts = document.querySelector('span#totalProducts');

    const order = document.querySelectorAll('#orderBy');
    const filtersBlock = document.querySelector('#filtersBlock');
    const filterBrands = document.querySelector('#filter-brands');
    const filterStockStatus = document.querySelector('#filter-stock');
    // const filterPrice = document.querySelector("#filter-price");
    const filterSquere = document.querySelector("#filter-squere");
    const filterType = document.querySelector("#filter-system-type");

    const topSellersZone = document.querySelector('#topSellers');

    const parentCategory = document.querySelector("input#parent_category_id").value;

    const categoryDescHeader = document.querySelector('#categoryDescHeader');
    const showFullDesc = document.querySelector('#showFullDesc');
    


    let js_range_ricprice = null;
    let js_range_squere = null;

    let thisProducts;

    let page = 1;
    let maxPage;
    let orderBy;
    let orderByDESC = true;
    let filters = {
        brand: [],
        status: []
    };

    async function checkPosition() {
        const height = Math.max(
            document.body.scrollHeight, document.documentElement.scrollHeight,
            document.body.offsetHeight, document.documentElement.offsetHeight,
            document.body.clientHeight, document.documentElement.clientHeight
        );

        const screenHeight = window.innerHeight
        const scrolled = window.scrollY
        const threshold = height - screenHeight;
        const position = scrolled + screenHeight

        
        if (position >= threshold) {
            if (page < maxPage) {
                page++;
                renderSkeletons();
                await getProducts(orderBy,filters).then((data) => {
                    thisProducts = data;
                })
                await renderProducts(thisProducts);
            }
        }
    }

    function throttle(callee, timeout) {
        let timer = null

        return function perform(...args) {
            if (timer) return

            timer = setTimeout(() => {
            callee(...args)

            clearTimeout(timer)
            timer = null
            }, timeout)
        }
    }


    (() => {
        window.addEventListener('scroll', throttle(checkPosition, 250))
        window.addEventListener('resize', throttle(checkPosition, 250))
    })()

    const renderSkeletons = () => {
        for(let i = 0; i < 49; i++)
        {
            let sk = document.createElement('div');
            sk.className = "col-xl-4 col-lg-6 col-12";
            sk.id = 'skeleton';
            sk.innerHTML = `
            <div class="mb-3 border " style="min-height: 550px; position:relative;">
                <svg
                    role="img"
                    width="550"
                    height="550"
                    aria-labelledby="loading-aria"
                    viewBox="0 0 550 550"
                    preserveAspectRatio="none"
                    >
                    <title id="loading-aria">Loading...</title>
                    <rect
                        x="0"
                        y="0"
                        width="100%"
                        height="100%"
                        clip-path="url(#clip-path)"
                        style='fill: url("#fill");'
                    ></rect>
                    <defs>
                        <clipPath id="clip-path">
                            <rect x="0" y="0" rx="0" ry="0" width="1" height="1" /> 
                            <rect x="141" y="455" rx="4" ry="4" width="114" height="33" /> 
                            <rect x="25" y="420" rx="4" ry="4" width="100" height="20" /> 
                            <rect x="29" y="263" rx="4" ry="4" width="208" height="31" /> 
                            <rect x="29" y="299" rx="4" ry="4" width="208" height="31" /> 
                            <rect x="29" y="241" rx="4" ry="4" width="226" height="17" /> 
                            <rect x="29" y="222" rx="4" ry="4" width="226" height="17" /> 
                            <rect x="29" y="194" rx="4" ry="4" width="226" height="17" /> 
                            <rect x="29" y="177" rx="4" ry="4" width="149" height="12" /> 
                            <circle cx="138" cy="114" r="55" /> 
                            <rect x="29" y="32" rx="4" ry="4" width="100" height="13" /> 
                            <rect x="20" y="454" rx="4" ry="4" width="114" height="33" />
                        </clipPath>
                        <linearGradient id="fill">
                        <stop
                            offset="0.599964"
                            stop-color="#f3f3f3"
                            stop-opacity="1"
                        >
                            <animate
                            attributeName="offset"
                            values="-2; -2; 1"
                            keyTimes="0; 0.25; 1"
                            dur="2s"
                            repeatCount="indefinite"
                            ></animate>
                        </stop>
                        <stop
                            offset="1.59996"
                            stop-color="#ecebeb"
                            stop-opacity="1"
                        >
                            <animate
                            attributeName="offset"
                            values="-1; -1; 2"
                            keyTimes="0; 0.25; 1"
                            dur="2s"
                            repeatCount="indefinite"
                            ></animate>
                        </stop>
                        <stop
                            offset="2.59996"
                            stop-color="#f3f3f3"
                            stop-opacity="1"
                        >
                            <animate
                            attributeName="offset"
                            values="0; 0; 3"
                            keyTimes="0; 0.25; 1"
                            dur="2s"
                            repeatCount="indefinite"
                            ></animate>
                        </stop>
                        </linearGradient>
                    </defs>
                    </svg>
            </div>`;
            productsList.appendChild(sk);
        }
    }

    const clearProductsList = () => {
        productsList.innerHTML = null;
        renderSkeletons();
    }

    order.forEach(orderByEl => {
        orderByEl.onclick = async (e) => {
            orderByDESC = !orderByDESC;
            page = 1;
            order.forEach(el => el.style.color = "gray")
            e.target.style.color = "var(--bs-link-color)"
            clearProductsList();
            if (orderByEl.dataset.orderBy === "ric_current")
            {
                orderBy = 'ric_current';
            }
            if (orderByEl.dataset.orderBy === "rating")
            {
                orderBy = 'sort';
            }
            if (orderByEl.dataset.orderBy === "badges_count")
            {
                orderBy = 'badges_count';
            }
            await getProducts(orderBy, filters).then((data) => {
                thisProducts = data;
            })
            await renderProducts(thisProducts);
        }
    });

    async function getProducts(orderBy, filters = null)
    {
        let requestURL = `/api/products?category_id=${categoryID}&orderBy=${orderBy}&orderByDESC=${orderByDESC}&page=${page}`;
        if (filters !== null)
        {
            let filterQuery = new URLSearchParams(filters);
            requestURL += "&" + filterQuery;
        }
        const response = await fetch(`${requestURL}`)
        
        return await response.json();
    }

    const generateLogoByBrand = (brandName) => {
        let img = '';
        switch (brandName) {
            case 'AUX': {
                img = '/images/brands/auxair.png'
                break;
            }
            case 'Ecoclima': {
                img = '/images/brands/ecoclima.png'
                break;
            }
            case 'Electrolux': {
                img = '/images/brands/electrolux.png'
                break;
            }
            case 'Mitsubishi Electric': {
                img = '/images/brands/mitsubelectric.png'
                break;
            }
            default: {
                break;
            }
        }


        return img;
    }

    const generateProductNode = (product, className) => {
        let productNode = document.createElement('div');
        productNode.className = 'col-xl-4 col-lg-6 col-12';
        productNode.className += " "+className;
        productNode.innerHTML = `
            <div class="p-2 mb-3 border product-main" style="min-height: 550px; position: relative;">
                <div class="product-header d-flex justify-content-between mb-2">
                    <div class="product-logo">
                          <img src="" height="30px" alt="">
                    </div>
                   <div class="product-code">
                        Код: ${product.article === null ? "" : product.article}
                    </div>
                </div>
                <div style="position: absolute; columns: 1; top: 30px; right: 20px; z-index: 9999;" id="marketingBadges">
                </div>
				<a href="/products/${product.slug}">
                <div class="text-center product-anons-img">
				
                    <img id="images" src="${product.images && product.images.length > 0 ? "https://erc.hiconix.ru/storage/" + product.images[0].path + product.images[0].name + "." + product.images[0].extension : "/images/products/no-photo.jpeg"}" loading="lazy" alt="${product.category.product_prefix} ${product.brand.name} ${product.model} ${(product.squere && product.parentCategory!=2) ? product.squere : ""} ${(product.squere && product.parentCategory!=2) ? "м²" : ""}">
				
                </div>
				
                <div class="main-info pt-2">
                    <div class="group-name" style="font-size: 12px;">
                        ${product.category.product_prefix}
                    </div>
                    <div class="name" style="font-size: 15px;">
                        ${product.brand.name} ${product.model} ${(product.squere && product.parentCategory!=2)  ? product.squere : ""} ${(product.squere && product.parentCategory!=2)  ? "м²" : ""}
                    </div>
                </div>
				</a>
				
                <div class="product-properties" style="font-size: 12px;">
                    <ul id="props">
                    </ul>
                </div>
                <div class="mt-3">
                    <div id="statuses">
                    </div>
                </div>
                <div style="position: absolute; bottom: 10px; width: calc(100% - 20px);">
                    <div class="product-buttons" style="font-size: 12px; display: flex; position: relative; justify-content: space-between; width: 100%;">
                    <div class="product-price" style="${product.status == 0 ? `text-decoration:line-through` : ``}">
                        ${product.text_price == null ? product.ric_current + " &#8381;" : product.text_price}
                    </div>
                        <div><button id="inCartBtn" data-product-id="${product.prodInCart}" class="p-2 px-4 in-cart active" ${product.status == 0 ? `disabled style="cursor: not-allowed;"` : ``}><i class="fas fa-shopping-cart"></i> <span>Добавить</span></button></div>
                    </div>
					
                </div>
            </div>`;

        const inCartBtn = productNode.querySelector('button#inCartBtn');
        const statusNodes = productNode.querySelector('div#statuses');
        const productImgPath = generateLogoByBrand(product.brand.name);
        if (productImgPath) {
            productNode.querySelector('.product-logo img').setAttribute('src', productImgPath);
            productNode.querySelector('.product-logo img').setAttribute('alt', product.brand.name);
        }

        product.statuses.map(status => {
            statusNodes.innerHTML += status.html;
            if (status.withStock == true) {
                statusNodes.innerHTML += product.stock_html
            }
        });

        let props = [];

        //images
        const imageNode = productNode.querySelector('#images');
            
        const marketingBadges = productNode.querySelector('#marketingBadges');

        //badges
        let allBadges = [];

        if (product.badges.length > 0) {
            let msgHelper;

            product.badges.forEach(badge => {
                let badgeNode = document.createElement('div');
                badgeNode.style.position = 'relative';
                badgeNode.style.display = 'block';
                badgeNode.style.width = "64px";
                badgeNode.innerHTML = "";
                if (badge.text_html) {
                    badgeNode.innerHTML += badge.text_html;
                }
                allBadges.push(badge.code);
				
                badgeNode.innerHTML += `<img src="${badge.img}" style="display: block; z-index: 99999;" width="64px">`;

                badgeNode.onmouseover = (e) => {
                    let target = e.target;

                    msgHelper = document.createElement('div');
                    msgHelper.className = 'msg-helper';
                    msgHelper.innerHTML = badge.title;

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
		
		

if (window.outerWidth < 768) {	
setTimeout(function(){ 
msgHelper.remove();
msgHelper = null;
}, 1000);					
 }					
					
                }

                badgeNode.onmouseout = function(e) {

                    if (msgHelper) {
                        msgHelper.remove();
                        msgHelper = null;
                    }

                };

                marketingBadges.appendChild(badgeNode);
            })
        }

        if (product.images.length > 2) {
            let prodImages = [];
            for (let i = 2; i < product.images.length; i++) {
                prodImages.push('https://erc.hiconix.ru/storage/' + product.images[i].path + product.images[i].name + "." + product.images[i].extension)
            }
            imageNode.dataset.hoverSlides = JSON.stringify(prodImages);
        }

        inCartBtn.onclick = () => {
            let inCartBtnText = inCartBtn.querySelector('span');
            addToCart(product.prodInCart.split(','));
            inCartBtnText.innerText = 'Перейти';
            inCartBtn.onclick = () => {
                location.href = "/cart";
            }
        }
        
        let propsList = productNode.querySelector("#props");

        props.push({
                title: "Бренд",
                value: product.brand.name
            });
        if ((parentCategory == "23" || parentCategory == "26" || parentCategory == "1") && product.block_type_id !== "3") {
            if (product.squere != 0) {
                props.push({
                    title: "Площадь, м<sup>2</sup>",
                    value: product.squere
                });
            }
        }
        //anons props
        product.anons_props.forEach(prop => {
            if ((parentCategory == "23" || parentCategory == "26" || parentCategory == "1") && product.block_type_id !== "3") {
                if (prop.property_id == 16) {
                    if (prop.property_value && prop.property_value !== "0") {
                        props.push({
                            title: "Произв. холод, кВт",
                            value: prop.property_value
                        });
                    }
                }
                if (prop.property_id == 27) {
                    if (prop.property_value && prop.property_value !== "0") {
                        props.push({
                            title: "Длина трассы, м",
                            value: prop.property_value
                        });
                    }   
                }
            }
            if ((parentCategory == "3" || parentCategory == "2") && product.block_type_id !== 3) {
                if (prop.property_id == 16) {
                    if (prop.property_value && prop.property_value !== "0") {
                        props.push({
                            title: "Произв. холод, кВт",
                            value: prop.property_value
                        });
                    }
                }
                if (prop.property_id == 27) {
                    if (prop.property_value && prop.property_value !== "0") {
                        props.push({
                            title: "Длина трассы, м",
                            value: prop.property_value
                        });
                    }
                }
                if (prop.property_id == 26) {
                    if (prop.property_value && prop.property_value !== "0") {
                        props.push({
                            title: "Max. кол-во внутр. блоков",
                            value: prop.property_value
                        });
                    }
                }
            }
        })

        props.forEach(prop => {
            let propLi = document.createElement('li');
            propLi.innerHTML = `<span class="prop-name">${prop.title}</span><span class="prop-value">${prop.value}</span>`;
            propsList.appendChild(propLi);
        });

        return productNode;
    }

    async function renderProducts(products, productsNode = productsList, renderFiltersFunc = true) {
            let lcProducts;

            if(renderFiltersFunc == true) {
                maxPage = products.meta.last_page;
                lcProducts = products.data
            } else {
                lcProducts = products;
            }
           
            productsList.querySelectorAll('#skeleton').forEach(skeleton => skeleton.remove())
            
            Object.values(lcProducts).forEach(product => {
                
                
                let allBadges = [];

                product.badges.forEach(badge => allBadges.push(badge.code))
                let productNode = generateProductNode(product);
                /* кол-во хитов */
                if (allBadges.indexOf('(s3)') !== -1 && topSellersZone.childElementCount < 6     ) {
                    if (topSellersZone.childElementCount < 10) {
                        productNode.style.display = 'block';
                    } else {
                        productNode.style.display = 'none';
                    }
                    
                    let productNodeHit = generateProductNode(product, 'swiper-slide');

                    topSellersZone.appendChild(productNodeHit);
                    productsNode.appendChild(productNode);
                } else {
                    productsNode.appendChild(productNode);
                }
            })
            hoverSlider.prepareMarkup();

            if (topSellersZone.childElementCount == 0) {
                topSellersZone.style.display = 'none';
				document.getElementById("hitpr").style.display = 'none';
            }

        if (renderFiltersFunc == true) {
            if (staticFilters === null) staticFilters = products.filters;
            renderFilters(products.filters);
            totalProducts.innerText = products.meta.total;
        }
    }

    let staticFilters = null;
    let brandFilter = null;
    let squereFilter = null;
    let allSqueres = false;

    const renderFilters = async (fil) => {
        //brands
        filterBrands.innerHTML = "";
        
        if(typeof filters["brand"] !== 'object') {
            filters["brand"] = [];
        }

        if (!filters.brand) {
            brandFilters = fil.brands;
        } else {
            brandFilters = staticFilters.brands;
        }
        brandFilters.forEach(brand => {
            let brandCheckbox = document.createElement('div');
            brandCheckbox.className = "p-1";
            brandCheckbox.innerHTML = `
                <input type="checkbox" value="${brand.id}" ${filters["brand"].indexOf(brand.id) !== -1 ? 'checked' : ''}>
                <label>${brand.name}</label>
            `;
            brandCheckbox.querySelector('input').onchange = async (e) => {
                if (e.target.checked == true) {
                    filters["brand"].push(parseInt(e.target.value));
                } else {
                    filters["brand"].splice(filters["brand"].indexOf(brand.id), 1)
                }
                await productsWithFilters(filters);
            }
            filterBrands.appendChild(brandCheckbox);
        });
        if (brandFilters.length === 0) {
            filterBrands.parentNode.querySelector('.filter-block--header').style.backgroundColor = 'rgb(228, 228, 228)';
        }
        //price
        // let inputPriceMin = filterPrice.querySelector("input#min");
        // let inputPriceMax = filterPrice.querySelector("input#max");
        
        /* inputPriceMin.oninput = (e) => {
            let inputMinValue = e.target.value;
            if (e.target.value !== "") {
                js_range_ricprice.update({
                    from: inputMinValue
                });
            }
        }

        inputPriceMax.oninput = (e) => {
            let inputMaxValue = e.target.value;
            if (e.target.value !== "") {
                js_range_ricprice.update({
                    to: inputMaxValue
                });
            }
        } */
        
        /* if (!filters.min_price && !filters.max_price)
        {
            inputPriceMin.value = fil.ric_price_min;
            inputPriceMax.value = fil.ric_price_max;
            if (fil.ric_price_min != null && fil.ric_price_max != null) {
                if (js_range_ricprice) {
                    js_range_ricprice.update({
                        from: fil.ric_price_min,
                        to: fil.ric_price_max,
                        min: fil.ric_price_min,
                        max: fil.ric_price_max
                    });
                }
            } else {
                filterPrice.parentNode.remove();
            }
        }

        if (fil.ric_price_max !== null && fil.ric_price_min !== null) {
            init_range_ric({
                from: fil.ric_price_min,
                to: fil.ric_price_max,
                min: fil.ric_price_min,
                max: fil.ric_price_max
            });
        } */

        //squeres - range
        if (parentCategory == 3 || parentCategory == 2 || parentCategory == 4) {
            if (js_range_squere == null) {
            filterSquere.innerHTML = `<div class="row text-center align-middle" style="margin-left: 55px;">
                <div class="col-3 p-0">
                    <input type="number" id="min" class="form-control-range">
                </div>
                <div class="col-1 p-0 text-center">-</div>
                <div class="col-3 p-0">
                    <input type="number" id="max" class="form-control-range">
                </div>
                <div class="col-1">
                    м<sup>2</sup>
                </div>
                </div>
                <div class="mt-2 row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <input id="range_squere">
                    </div>
                    <div class="col-1"></div>
                </div>`;
            }

            let inputSquereMin = filterSquere.querySelector("input#min")
            let inputSquereMax = filterSquere.querySelector("input#max")

            inputSquereMin.oninput = (e) => {
                let inputMinValue = e.target.value;
                if (e.target.value != "" || e.target.value != "") {
                    js_range_squere.update({
                        from: inputMinValue
                    });
                }
            }

            inputSquereMax.oninput = (e) => {
                let inputMaxValue = e.target.value;
                if (e.target.value != "" || e.target.value != "") {
                    js_range_squere.update({
                        to: inputMaxValue
                    });
                }
            }

            if (!filters.min_squere && !filters.max_squere)
            {   
                inputSquereMin.value = fil.squere_min;
                inputSquereMax.value = fil.squere_max;
                if (fil.squere_max != 0) {
                    if (js_range_squere) {
                        filterSquere.parentNode.style.display = 'block'
                        js_range_squere.update({
                            from: fil.squere_min,
                            to: fil.squere_max,
                            min: fil.squere_min,
                            max: fil.squere_max
                        });
                    }
                } else {
                    filterSquere.parentNode.querySelector('.filter-block--header').style.backgroundColor = 'rgb(228, 228, 228)';
                }
            }
            if (fil.squere_max !== null) {
                init_range_squere({
                    from: fil.squere_min,
                    to: fil.squere_max,
                    min: fil.squere_min,
                    max: fil.squere_max
                });
            } else {
                filterSquere.parentNode.querySelector('.filter-block--header').style.backgroundColor = 'rgb(228, 228, 228)';
            }
        } else {
            //squeres - checkbox
            filterSquere.innerHTML = "";
            if(typeof filters["squere"] !== 'object') {
                filters["squere"] = [];
            }

            if (!filters.squere) {
                squereFilter = fil.squeres;
            } else {
                squereFilter = Object.values(staticFilters.squeres);
            }

            let squereI = 0;
            squereFilter.forEach(squere => {
                let squereCheckbox = document.createElement('div');
                squereI++;
                squereCheckbox.className = "p-1";
                squereCheckbox.innerHTML = `
                    <input type="checkbox" value="${squere.value}" ${filters["squere"].indexOf(squere.value) !== -1 ? 'checked' : ''}>
                    <label>${squere.name}</label>
                `;
                squereCheckbox.querySelector('input').onchange = async (e) => {
                    if (e.target.checked == true) {
                        filters["squere"].push(parseInt(e.target.value))
                    } else {
                        filters["squere"].splice(filters["squere"].indexOf(squere.value), 1)
                    }
                    await productsWithFilters(filters);
                }
                if (squereI > 5) {
                    if (allSqueres == false) {
                        squereCheckbox.style.display = "none";
                    } else {
                        squereCheckbox.style.display = "block";
                    }
                }
                filterSquere.appendChild(squereCheckbox);
            });
            
            if (squereFilter.length === 0) {
                filterSquere.parentNode.querySelector('.filter-block--header').style.backgroundColor = 'rgb(228, 228, 228)';
            }

            if (filterSquere.childElementCount > 5) {
                let showAllBtn = document.createElement('div');
                showAllBtn.className = 'text-center';
                showAllBtn.innerHTML = `
                    <button class="link" style="text-decoration: underline;">${allSqueres == true ? 'скрыть..' : 'показать все..'}</button>
                `;
                showAllBtn.querySelector('button').onclick = (e) => {
                    allSqueres = !allSqueres;
                    if (allSqueres == true) {
                        Array.from(filterSquere.children).map(node => node.style.display = 'block');
                        e.target.innerHTML = 'скрыть..'
                    } else {
                        let count = filterSquere.children.length-1;
                        for (let index = 5; index < count; index++) {
                            filterSquere.children[index].style.display = 'none';
                        }
                        e.target.innerHTML = 'показать все..';
                    }
                    
                }
                filterSquere.appendChild(showAllBtn);
            }
            
        }

        if(typeof filters["status"] !== 'object') {
            filters["status"] = [];
        }

        filterStockStatus.innerHTML = "";
        //status
        staticFilters.statuses.forEach(status => {
            let statusCheckbox = document.createElement('div');
            statusCheckbox.className = "p-1";
            statusCheckbox.innerHTML = `
                <input type="checkbox" value="${status.value}" ${filters["status"].indexOf(parseInt(status.value)) !== -1 ? 'checked' : ''}>
                <label>${status.name}</label>
            `;
            statusCheckbox.querySelector('input').onchange = async (e) => {
                if (e.target.checked == true) {
                    filters["status"].push(parseInt(e.target.value))
                } else {
                    filters["status"].splice(filters["status"].indexOf(parseInt(status.value)), 1)
                }
                await productsWithFilters(filters);
            }
            filterStockStatus.appendChild(statusCheckbox);
        });
        //stock
        if(typeof filters["stock"] !== 'object') {
            filters["stock"] = [];
        }
        staticFilters.stock.forEach(stock => {
            let stockCheckbox = document.createElement('div');
            let stockName = stock.name.charAt(0).toUpperCase() + stock.name.slice(1);
            stockCheckbox.className = "p-1";
            stockCheckbox.innerHTML = `
                <input type="checkbox" value="${stock.name}" ${filters["stock"].indexOf(stock.name) !== -1 ? 'checked' : ''}>
                <label>${stockName}</label>
            `;
            stockCheckbox.querySelector('input').onchange = async (e) => {

                if (e.target.checked == true) {
                    filters["stock"].push(e.target.value)
                } else {
                    filters["stock"].splice(filters["stock"].indexOf(stock.name), 1)
                }
                await productsWithFilters(filters);
            }
            filterStockStatus.appendChild(stockCheckbox);
        });
        if (staticFilters.statuses.length === 0 && staticFilters.stock.length === 0) {
            filterStockStatus.parentNode.querySelector('.filter-block--header').style.backgroundColor = 'rgb(228, 228, 228)';
        }
        //in_way
        if (fil.in_way != 0) {
            let inWayCheckbox = document.createElement('div');
            inWayCheckbox.className = "p-1";
            inWayCheckbox.innerHTML = `
                <input type="checkbox" ${filters["in_way"] === true ? 'checked' : ''}>
                <label>В пути</label>
            `;
            inWayCheckbox.querySelector('input').onchange = async (e) => {
                if (e.target.checked == true) {
                    filters["in_way"] = e.target.checked;
                } else {
                    delete(filters["in_way"])
                }
                await productsWithFilters(filters);
            }
            filterStockStatus.appendChild(inWayCheckbox);
        }
        

        //type
        if (filterType) {
            filterType.querySelectorAll('input[type="radio"]').forEach(input => {
                input.onchange = async (e) => {
                    if (e.target.value !== "all") {
                        categoryID = parseInt(e.target.value);
                    } else {
                        categoryID = parentCategory;
                    }
                    await productsWithFilters(filters);
                }
            });
        }
        
    }

    const productsWithFilters = async (filters) => {
	
document.getElementById("hitpr").style.display = 'none';
document.getElementById("categoryD").style.display = 'none';

        clearProductsList();
        page = 1;
        await getProducts(orderBy,filters).then((data) => {
            thisProducts = data;
        })
        await renderProducts(thisProducts);
    }

    const init_range_squere = (data) => {
        if (js_range_squere == null) {
            js_range_squere = ionRangeSlider('#range_squere', {
                skin: "modern",
                type: "double",
                grid: false,
                min: data.min,
                max: data.max,
                from: data.from,
                to: data.to,
                onChange: function (data) {
                    filterSquere.querySelector("input#min").value = data.from;
                    filterSquere.querySelector("input#max").value = data.to;
                },
            
                onFinish: async function (data) {
                    filters.min_squere = data.from;
                    filters.max_squere = data.to;
                    await productsWithFilters(filters);
                },

                onUpdate: async function (data) {
                    filters.min_squere = data.from;
                    filters.max_squere = data.to;
                    await productsWithFilters(filters);
                }
            });
        }
    }
    
    /* const init_range_ric = (data) => {
        if (js_range_ricprice == null) {
            js_range_ricprice = ionRangeSlider('#range_ric_price', {
                skin: "modern",
                type: "double",
                grid: false,
                min: data.min,
                max: data.max,
                from: data.from,
                to: data.to,
                postfix: " ₽",
                onChange: function (data) {
                    filterPrice.querySelector("input#min").value = data.from;
                    filterPrice.querySelector("input#max").value = data.to;
                },
            
                onFinish: async function (data) {
                    filters.min_price = data.from;
                    filters.max_price = data.to;
                    await productsWithFilters(filters);
                },

                onUpdate: async function (data) {
                    filters.min_price = data.from;
                    filters.max_price = data.to;
                    await productsWithFilters(filters);
                }
            });
            
        }
    } */
    const hideCategoryDescription = () => {
        let content = categoryDescHeader.innerHTML.split(/\r?\n/);
		let categoryD = document.querySelector('#categoryD');
		let desc_hidden_button = document.querySelector('.desc_hidden_button');
		
        if (content.length > 0) {
            let firstContent = content[0];
            let fullContent = content.join("\r\n");
            let isOpenContent = false;
            //categoryDescHeader.innerHTML = firstContent;

            if (showFullDesc) {
                showFullDesc.onclick = () => {
                    isOpenContent = !isOpenContent;
                    if (isOpenContent == true) {
                       // categoryDescHeader.innerHTML = fullContent;
                       // showFullDesc.innerText = "закрыть";
					   categoryD.style.maxHeight="unset";
					   desc_hidden_button.style.transform = 'rotate(180deg)';
					  categoryDescHeader.style.marginBottom = '50px';
                    }
					
                    if (isOpenContent == false) {
                        //categoryDescHeader.innerHTML = firstContent;
                        //showFullDesc.innerText = "посмотреть целиком";
						categoryD.style.maxHeight="100px";
						desc_hidden_button.style.transform = 'rotate(0)';
						categoryDescHeader.style.marginBottom = '0';
                    }
                    
                }
            }
        }
    }

    const init = async () => {
        await getProducts().then((data) => {
            thisProducts = data;
        })
        await renderProducts(thisProducts);
        hoverSlider.init({});

        /* const swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
        }); */

        hideCategoryDescription();
    }

    const addToCart = (ids) => {
        let products = {};
        if(localStorage.getItem('cart'))
        {
            products = JSON.parse(localStorage.getItem('cart'));
        }
        ids.forEach(id => {
            products[id] ? products[id] += 1 : products[id] = 1;
        })
        localStorage.setItem('cart', JSON.stringify(products));
        renderCart();
    }

    init();

});
</script>
<script src="{{asset('/libs/range-slider/rangeslider.min.js')}}"></script>
<script src="/public/js/hover-slider.min.js"></script>
@endsection
