@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/partner">Стать партнёром</a></li>
            <li class="breadcrumb-item active">Проектные организации</li>
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
				<li><span>Проектные организации</span></li>
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
			<li><span>Проектные организации</span></li>
		</ul>
	</div>
</div>
<div class="text-center mb-2">
<a class="atuin-btn" id="showPopUp" href="#popup1">Стать партнером</a>
</div>

<div class="container">
    <div class="row support-content main-col">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h1>Проектные организации</h1>
                    <p class="support-block-inner-item-text">Наша компания предлагает выгодные условия сотрудничества
                        проектным организациям и архитектурно-конструкторским бюро. При включении оборудования «Хиконикс» в
                        проект проектировщик-партнер получает: приоритетное право на поставку данного оборудования, самые
                        выгодные условия заказа по всему ассортименту, индивидуальную скидку в зависимости от объемов
                        закупки.
                    </p>
                </div>
            </div>
        </div>
        <div class="support-inner-content">
            <div class="support-block support-block-1">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="support-block-content">
                            <div id="tech" class="support-block-title">Преимущества партнерства с «Хиконикс»</div>
                            <div class="support-block-text">
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Доступные цены. Мы поставляем климатическую
                                        технику напрямую с заводов-производителей, без посредников, поэтому для партнеров у
                                        нас всегда есть выгодное ценовое предложение.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-people.svg);"></div>
                                    <div class="support-block-inner-item-text">Опытные проектировщики. При необходимости
                                        наши специалисты проводят <a href="https://hiconix.ru/support/ingeneer/">аудит
                                            проекта</a> и дают экспертную оценку, рекомендуют оптимальное, более совершенное
                                        техническое решение. Помогут выполнить самые трудные участки проектных работ.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-approved.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text"><a
                                            href="https://hiconix.ru/support/marketing/">Маркетинговая поддержка</a>.
                                        Каждому партнеру предоставляем красочные каталоги продукции мировых брендов,
                                        рекламные и информационные буклеты. Подбираем подходящий формат маркетингового
                                        продвижения, предлагаем выгодные схемы сотрудничества.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="support-block-image" data-bgr-webp="/local/templates/hiconix/img/bg-9.jpg"
                            style="background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/bg-9.jpg.webp?1659682303340214);">

                        </div>
                    </div>
                </div>
            </div>
            <div class="support-block support-block-2">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="support-block-content">
                            <div id="tech" class="support-block-title">Стать партнером «Хиконикс»</div>
                            <div class="support-block-text">
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-approved.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Приглашаем к сотрудничеству на индивидуальных
                                        условиях юридических и физических лиц, которые специализируются на проектировании
                                        климатических инженерных систем для жилых, производственных и коммерческих
                                        помещений, зданий, торговых и спортивных комплексов. </div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-forklift.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text"><a
                                            href="https://hiconix.ru/partner/">Заполните заявку</a>, наш специалист свяжется
                                        с вами и согласует детали.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="support-block-image"
                            data-bgr-webp="/local/templates/hiconix/img/partnership-block-image.jpg"
                            style="background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/partnership-block-image.jpg.webp?165968230321946);">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection