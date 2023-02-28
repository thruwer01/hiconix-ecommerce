@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">Стать партнёром</li>
		</ol>
	</nav>
</div>

<div class="mobile-sub-menu d-block d-sm-none">
	<div class="mob-container">
        <div class="chosen"><span>Выбрать:</span><i class="fa fa-caret-down"></i></div>
        <div class="menulist">
			<ul>
			
				<li><a href="/partner/regionalnye-distribyutory">Региональные дистрибьюторы</a></li>
				<li><a href="/partner/optovye-klimaticheskie-kompanii">Оптовые климатические компании</a></li>
				<li><a href="/partner/roznichnye-klimaticheskie-kompanii">Розничные климатические компании</a></li>
				<li><a href="/partner/internet-magazin">Интернет-магазины</a></li>
				<li><a href="/partner/inzhiniringovye-kompanii">Инжиниринговые компании</a></li>
				<li><a href="/partner/proektnye-organizatsii">Проектные организации</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="sub-menu d-none d-sm-block">
	<div class="descmenulist">
		<ul>
			
			<li><a href="/partner/regionalnye-distribyutory">Региональные дистрибьюторы</a></li>
			<li><a href="/partner/optovye-klimaticheskie-kompanii">Оптовые климатические компании</a></li>
			<li><a href="/partner/roznichnye-klimaticheskie-kompanii">Розничные климатические компании</a></li>
			<li><a href="/partner/internet-magazin">Интернет-магазины</a></li>
			<li><a href="/partner/inzhiniringovye-kompanii">Инжиниринговые компании</a></li>
			<li><a href="/partner/proektnye-organizatsii">Проектные организации</a></li>
		</ul>
	</div>
</div>
<div class="text-center mb-2">
<a class="atuin-btn" id="showPopUp" href="#popup1">Стать партнером</a>
</div>
<div class="container">
    <div class="row partnership-content main-col">
        <div class="col-12">
            <div class="page-title">
                <div class="row">
                    <div class="col-12">
                        <h1>Стать партнёром</h1>
					</div>
				</div>
			</div>
            <div class="partnership-inner-content">
                <div class="partnership-block">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="partnership-block-content">
                                <div class="partnership-block-title">Преимущества работы с нами</div>
                                <div class="partnership-block-text">
                                    <div class="partnership-block-inner-item">
                                        <div class="partnership-block-inner-item-icon" style="background-image: url(/local/templates/hiconix/img/icon-approved.svg);"></div>
                                        <div class="partnership-block-inner-item-content">
                                            <div class="partnership-block-inner-item-title">Широкий ассортимент оборудования</div>
                                            <div class="partnership-block-inner-item-text">Мы осуществляем прямые поставки оборудования в Россию что гарантирует вам низкую цену</div>
										</div>
									</div>
                                    <div class="partnership-block-inner-item">
                                        <div class="partnership-block-inner-item-icon" style="background-image: url(/local/templates/hiconix/img/icon-people.svg);"></div>
                                        <div class="partnership-block-inner-item-content">
                                            <div class="partnership-block-inner-item-title">Развитая дилерская сеть</div>
                                            <div class="partnership-block-inner-item-text">Популярные модели всегда в наличии на складе с удобным проездом для большегрузов</div>
										</div>
									</div>
                                    <div class="partnership-block-inner-item">
                                        <div class="partnership-block-inner-item-icon" style="background-image: url(/local/templates/hiconix/img/icon-forklift.svg);"></div>
                                        <div class="partnership-block-inner-item-content">
                                            <div class="partnership-block-inner-item-title">Федеральная складская программа</div>
                                            <div class="partnership-block-inner-item-text">Популярные модели всегда в наличии на складе с удобным проездом для большегрузов</div>
										</div>
									</div>
                                    <div class="partnership-block-inner-item">
                                        <div class="partnership-block-inner-item-icon" style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);"></div>
                                        <div class="partnership-block-inner-item-content">
                                            <div class="partnership-block-inner-item-title">Техническая и маркетинговая поддержка</div>
                                            <div class="partnership-block-inner-item-text">Популярные модели всегда в наличии на складе с удобным проездом для большегрузов</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="col-12 col-md-6 hide_mobile">
                            <div class="partnership-block-image" data-bgr-webp="/local/templates/hiconix/img/partnership-block-image.jpg" style="background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/partnership-block-image.jpg.webp?165968230321946);">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection