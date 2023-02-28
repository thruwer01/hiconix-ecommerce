@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/partner">Стать партнёром</a></li>
            <li class="breadcrumb-item active">Розничные климатические компании</li>
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
				<li><span>Розничные климатические компании</span></li>
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
			<li><span>Розничные климатические компании</span></li>
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
    <div class="row support-content main-col">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h1>Розничные климатические компании</h1>
                    <p class="support-block-inner-item-text">У «Хиконикс» привлекательные условия сотрудничества для
                        розничных продавцов климатической техники. Партнерская программа предусматривает индивидуальный
                        подход к обслуживанию регулярных заказов. Дизайнерским студиям, проектным бюро, строительным и
                        монтажным компаниям, а также торговым точкам мы: помогаем оформить шоурум, предоставляем образцы
                        техники по специальным ценам или бесплатно, оформляем несложные баннеры, наружную рекламу.
                    </p>
                </div>
            </div>
        </div>
        <div class="support-inner-content">
            <div class="support-block support-block-1">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="support-block-content">
                            <div id="tech" class="support-block-title">Преимущества для партнеров «Хиконикс»</div>
                            <div class="support-block-text">
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Низкие закупочные цены. Поставляем
                                        оборудование в Россию напрямую от мировых производителей, без посредников, поэтому
                                        гарантируем вам конкурентные цены.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-people.svg);"></div>
                                    <div class="support-block-inner-item-text">Скидки. При постоянных плановых закупках по
                                        итогам предыдущего периода можем предоставлять дополнительные скидки с нашей
                                        стороны.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-forklift.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Выгодные условия рекламы. Для презентаций и
                                        других промомероприятий, связанных с продвижением, стратегическим партнерам
                                        предлагаем схему финансирования 50/50. Бонус – раздаем сувениры и разыгрываем ценные
                                        призы.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Бесплатные промоматериалы. Вы получаете
                                        красочные каталоги и брошюры производителей и дистрибьюторов, сувенирную продукцию,
                                        информационные буклеты.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-approved.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Поддержка товарооборота. В случае падения
                                        продаж мы подберем для вас подходящую форму маркетингового продвижения,
                                        скорректируем вектор развития вашего магазина.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-people.svg);"></div>
                                    <div class="support-block-inner-item-text">Сервисная поддержка. Диагностика техники
                                        перед поставкой, профессиональный послепродажный сервис, технические консультации, в
                                        том числе при проектировании и монтаже сложных объектов.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="support-block-image" data-bgr-webp="/local/templates/hiconix/img/bg-5.jpg"
                            style="background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/bg-5.jpg.webp?165968230346138);">

                        </div>
                    </div>
                </div>
            </div>
            <div class="support-block support-block-2">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="support-block-content">
                            <div id="tech" class="support-block-title">Как стать партнером «Хиконикс»</div>
                            <div class="support-block-text">
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-people.svg);"></div>
                                    <div class="support-block-inner-item-text">Станьте нашим партнером, если вы юридическое
                                        или физическое лицо, которое занимается продажей, монтажом, проектированием систем
                                        кондиционирования. </div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-approved.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Будем рады обсудить с вами индивидуальные
                                        условия сотрудничества.
                                    </div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text"><a
                                            href="https://hiconix.ru/partner/">Оставьте заявку</a>, наш специалист свяжется
                                        с вами.
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