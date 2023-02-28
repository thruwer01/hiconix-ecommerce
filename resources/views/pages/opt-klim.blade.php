@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item"><a href="/partner">Стать партнёром</a></li>
            <li class="breadcrumb-item active">Оптовые климатические компании</li>
        </ol>
    </nav>
</div>

<div class="mobile-sub-menu d-block d-sm-none">
	<div class="mob-container">
        <div class="chosen"><span>Выбрать:</span><i class="fa fa-caret-down"></i></div>
        <div class="menulist">
			<ul>
				<li><a href="/partner/regionalnye-distribyutory">Региональные дистрибьюторы</a></li>
				<li><span>Оптовые климатические компании</span></li>
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
			<li><span>Оптовые климатические компании</span></li>
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
    <div class="row support-content main-col">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h1>Оптовые климатические компании</h1>
                    <p class="support-block-inner-item-text">«Хиконикс» – дистрибьютор климатической техники с 500
                        дилерскими точками в 30 городах России. Поставляем продукцию напрямую с заводов ведущих мировых
                        производителей. Профессионализм, самоотдача и преданность своему делу помогают нам на 100 %
                        выполнять обязательства перед крупными торговыми площадками и коммерческими организациями. Наши
                        партнеры всегда получают самое выгодное ценовое предложение.
                    </p>
                </div>
            </div>
        </div>
        <div class="support-inner-content" style="width: 100%;">
            <div class="support-block support-block-1">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="support-block-content">
                            <div id="tech" class="support-block-title">Преимущества для партнеров «Хиконикс»</div>
                            <div class="support-block-text">
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-forklift.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Максимальные скидки на весь ассортимент в
                                        зависимости от объемов закупок.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Ваша экономия финансовых средств, повышенная
                                        прибыль за счет выгодных цен.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-approved.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Качественная техника мировых брендов (AUX,
                                        Mitsubishi Electric, Electrolux, KOMFOVENT и др.).</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text"><a href="https://hiconix.ru/support/">Все
                                            виды поддержки</a> от нас – маркетинговая, техническая, проектная,
                                        информационная.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-people.svg);"></div>
                                    <div class="support-block-inner-item-text">Популярные модели всегда в наличии на нашем
                                        большом складе с удобным подъездом.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-approved.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Специалисты «Хиконикс» всегда на связи, в том
                                        числе по WhatsApp, Skype, e-mail.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-people.svg);"></div>
                                    <div class="support-block-inner-item-text">Подарки для ваших заказчиков, которые повысят
                                        ваши продажи и товарооборот.</div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Отсутствие региональных ограничений – продажи
                                        возможны на любой территории.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="support-block-image" data-bgr-webp="/local/templates/hiconix/img/bg-3.jpg"
                            style="background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/bg-3.jpg.webp?165968230375290);">

                        </div>
                    </div>
                </div>
            </div>
            <div class="support-block support-block-2">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="support-block-content">
                            <div id="tech" class="support-block-title">«Хиконикс» – надежный партнер для бизнеса</div>
                            <div class="support-block-text">
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-approved.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Стремимся быть лучшими в отрасли, поэтому
                                        строим сотрудничество на принципах понимания и доверия. </div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-people.svg);"></div>
                                    <div class="support-block-inner-item-text">Для крупных совместных проектов предложим
                                        оптимальную схему работы, придем к общему решению.
                                    </div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-forklift.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Вы можете подобрать технику под запросы и
                                        ценовые ожидания ваших заказчиков.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="support-block-image" data-bgr-webp="/local/templates/hiconix/img/bg-4.jpg"
                            style="background-image: url(/upload/delight.webpconverter/local/templates/hiconix/img/bg-4.jpg.webp?165968230370354);">

                        </div>
                    </div>
                </div>
            </div>
            <div class="support-block support-block-1">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="support-block-content">
                            <div id="tech" class="support-block-title">Как стать партнером</div>
                            <div class="support-block-text">
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-forklift.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Заполните <a
                                            href="https://hiconix.ru/partner/">заявку на сайте</a></div>
                                </div>
                                <div class="support-block-inner-item">
                                    <div class="support-block-inner-item-icon"
                                        style="background-image: url(/local/templates/hiconix/img/icon-megaphone.svg);">
                                    </div>
                                    <div class="support-block-inner-item-text">Будем рады детально обсудить с вами
                                        индивидуальные условия партнерской программы – сроки выполнения заказов, размеры
                                        партий, виды оплаты, возможности отсрочки платежей, гарантийные обязательства,
                                        доставку.</div>
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