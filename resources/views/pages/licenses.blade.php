@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/about">О компании</a></li>
            <li class="breadcrumb-item active" aria-current="page">Лицензии</li>
        </ol>
    </nav>
</div>

<div class="mobile-sub-menu d-block d-sm-none">
	<div class="mob-container">
        <div class="chosen"><span>Выбрать:</span><i class="fa fa-caret-down"></i></div>
        <div class="menulist">
			<ul>
				<li><a href="/about/about-us">О нас</a></li>
				<li><a href="/publications/news">Новости</a></li>
				<li><span>Лицензии</span></li>
			</ul>
		</div>
	</div>
</div>

<div class="sub-menu d-none d-sm-block">
	<div class="descmenulist">
		<ul>
				<li><a href="/about/about-us">О нас</a></li>
				<li><a href="/publications/news">Новости</a></li>
				<li><span>Лицензии</span></li>
		</ul>
	</div>
</div>


<div class="container">
    <div class="row licenses-content main-col">
        <div class="col-12">
            <div class="inner-heading-block">
                <div class="row">
                    <div class="col-xxl-6 col-lg-7 col-12 order-lg-1 order-2">
                        <div class="inner-heading-block-content">
                            <div class="page-title">
                                <h1>Лицензии и сертификаты</h1>
                            </div>
                            <div class="inner-heading-block-text">
                                Компания «Хиконикс» — официальный дистрибьютор многих компаний-производителей климатического
                                оборудования. На этой странице вы можете найти постоянно обновляемый список действующих
                                дистрибьюторских сертификатов, выданных нам.
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-5 col-5 col-12 order-lg-2 order-1">
                        <div class="licenses-heading-block-image inner-heading-block-image"
                            data-bgr-webp="/local/templates/hiconix/img/licenses-heading-bg.jpg"
                            style="background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/licenses-heading-bg.jpg.webp?165968230315874);">
                        </div>
                    </div>
                </div>
            </div>
            <div class="licenses-inner-content">
                <div class="row">
                    <div class="col-6 col-xxl-2 col-lg-3 licenses-item-wrap">
                        <a data-fancybox="licenses" href="https://hiconix.ru/upload/iblock/570/5708b2bad6b19839dc2bf3d3fcb3144a.jpg"
                            data-fancybox="licenses" class="licenses-item">
                            <img src="/upload/iblock/b4a/b4a399f1320669eaa06270e856f97a81.jpg"
                                data-webp-src="/upload/iblock/b4a/b4a399f1320669eaa06270e856f97a81.jpg" alt="sert-AUX"
                                class="licenses-item-image">
                        </a>
                    </div>
                    <div class="col-6 col-xxl-2 col-lg-3 licenses-item-wrap">
                        <a data-fancybox="licenses" href="https://hiconix.ru/upload/iblock/b4a/sertifikat-panasonic-hiconix-sm.jpg"
                            data-fancybox="licenses" class="licenses-item">
                            <img src="/upload/iblock/b4a/sertifikat-panasonic-hiconix-sm.jpg"
                                data-webp-src="/upload/iblock/b4a/sertifikat-panasonic-hiconix-sm.jpg" alt="sert-Panasonic"
                                class="licenses-item-image">
                        </a>
                    </div>
                    <div class="col-6 col-xxl-2 col-lg-3 licenses-item-wrap">
                        <a data-fancybox="licenses" href="https://hiconix.ru/upload/iblock/d9e/d9ed006f4828cb244833287698fc5e92.jpg"
                            data-fancybox="licenses" class="licenses-item">
                            <img src="/upload/iblock/296/296c8830993e192a070a879f7e868f16.jpg"
                                data-webp-src="/upload/iblock/296/296c8830993e192a070a879f7e868f16.jpg" alt="Electrolux"
                                class="licenses-item-image">
                        </a>
                    </div>
                    <div class="col-6 col-xxl-2 col-lg-3 licenses-item-wrap">
                        <a data-fancybox="licenses" href="https://hiconix.ru/upload/iblock/ec7/ec71344039ac92105d32459c1b77f211.jpg"
                            data-fancybox="licenses" class="licenses-item">
                            <img src="/upload/iblock/164/164b463cd4d6a3a1466d6a8260f38ed2.jpg"
                                data-webp-src="/upload/iblock/164/164b463cd4d6a3a1466d6a8260f38ed2.jpg" alt="Komfovent"
                                class="licenses-item-image">
                        </a>
                    </div>
                    <div class="col-6 col-xxl-2 col-lg-3 licenses-item-wrap">
                        <a data-fancybox="licenses" href="https://hiconix.ru/upload/iblock/1a1/1a189322a52822a524d8c1bc7054ecf8.png"
                            data-fancybox="licenses" class="licenses-item">
                            <img src="/upload/iblock/39f/39f448b501c35074b1a5f652d1e66569.png"
                                data-webp-src="/upload/iblock/39f/39f448b501c35074b1a5f652d1e66569.png"
                                alt="Mitsubishi Electric" class="licenses-item-image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/public/js/fancy.js"></script>
@endsection